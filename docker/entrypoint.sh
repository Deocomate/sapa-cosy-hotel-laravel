#!/bin/bash
set -e

echo "========================================"
echo "  Sapa Cosy Hotel - Entrypoint"
echo "  APP_MODE: ${APP_MODE:-production}"
echo "========================================"

# ---------------------------------------------------------------------------
# Wait for MySQL to be fully ready
# ---------------------------------------------------------------------------
echo "[entrypoint] Waiting for MySQL connection..."
max_retries=30
counter=0
until php -r "new PDO('mysql:host='.getenv('DB_HOST').';port='.getenv('DB_PORT').';dbname='.getenv('DB_DATABASE'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));" > /dev/null 2>&1 || [ $counter -eq $max_retries ]; do
    echo "[entrypoint] MySQL not ready yet... retry $((counter+1))/$max_retries"
    sleep 2
    counter=$((counter+1))
done

if [ $counter -eq $max_retries ]; then
    echo "[entrypoint] ERROR: Could not connect to MySQL after $max_retries retries"
    exit 1
fi

echo "[entrypoint] MySQL is ready!"

# ---------------------------------------------------------------------------
# Laravel Setup
# ---------------------------------------------------------------------------

# Ensure required storage and bootstrap directories exist with correct permissions on mounted volume
mkdir -p storage/app/public storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true
chmod -R 775 storage bootstrap/cache 2>/dev/null || true

# Clean any stale bootstrap cache from host
rm -f bootstrap/cache/packages.php bootstrap/cache/services.php bootstrap/cache/config.php bootstrap/cache/routes.php

# Generate APP_KEY if missing
if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "" ]; then
    echo "[entrypoint] Generating application key..."
    php artisan key:generate --force
fi

# Create storage link
echo "[entrypoint] Creating storage link..."
php artisan storage:link --force 2>/dev/null || true

# Clear and cache config for production
echo "[entrypoint] Optimizing application..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

if [ "$APP_MODE" = "production" ]; then
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
fi

# ---------------------------------------------------------------------------
# Migration & Seed Logic
# ---------------------------------------------------------------------------
APP_MODE="${APP_MODE:-production}"

if [ "$APP_MODE" = "development" ]; then
    echo "========================================"
    echo "  MODE: DEVELOPMENT"
    echo "  Running migrate:fresh --seed"
    echo "========================================"
    php artisan migrate:fresh --seed --force
    echo "[entrypoint] Development: Database fresh seeded!"

elif [ "$APP_MODE" = "production" ]; then
    echo "========================================"
    echo "  MODE: PRODUCTION"
    echo "  Running migrate (safe)"
    echo "========================================"
    php artisan migrate --force
    echo "[entrypoint] Production: Migrations applied!"

    # Seed only on first run (marker file in persistent volume)
    SEED_MARKER="/var/www/html/storage/.seeded"
    if [ ! -f "$SEED_MARKER" ]; then
        echo "[entrypoint] First run detected! Seeding database..."
        php artisan db:seed --force
        touch "$SEED_MARKER"
        echo "[entrypoint] Database seeded! Marker created at $SEED_MARKER"
    else
        echo "[entrypoint] Database already seeded (marker exists). Skipping seed."
    fi
else
    echo "[entrypoint] WARNING: Unknown APP_MODE='$APP_MODE'. Defaulting to safe migrate only."
    php artisan migrate --force
fi

# ---------------------------------------------------------------------------
# Start Supervisord (Nginx + PHP-FPM)
# ---------------------------------------------------------------------------
echo "========================================"
echo "  Starting Nginx + PHP-FPM..."
echo "========================================"
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
