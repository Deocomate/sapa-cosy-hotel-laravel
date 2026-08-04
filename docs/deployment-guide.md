# Deployment Guide

This document provides step-by-step instructions for deploying the **Sapa Cosy Hotel** Laravel 11 application to a production server (Ubuntu VPS with Nginx/Apache or cPanel hosting).

---

## 📋 1. Prerequisites

Before deploying, ensure your production environment satisfies:

- **Operating System**: Ubuntu 22.04 LTS / Debian 12 / RHEL (or cPanel hosting)
- **PHP**: PHP >= 8.2 with extensions: `pdo_mysql`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`, `curl`, `gd`, `fileinfo`, `zip`
- **Database**: MySQL >= 8.0 or MariaDB >= 10.5
- **Web Server**: Nginx or Apache with `mod_rewrite` enabled
- **Package Managers**: Composer 2.x and Node.js 18+ (or pre-compiled assets)

---

## 🚀 2. VPS Deployment Steps (Nginx + PHP-FPM)

### Step 1: Clone Repository & Set Permissions
```bash
cd /var/www
git clone https://github.com/your-organization/sapacosyhotel.vn.git
cd sapacosyhotel.vn

# Set directory ownership and permissions for web server
sudo chown -R www-data:www-data /var/www/sapacosyhotel.vn
sudo chmod -R 755 /var/www/sapacosyhotel.vn
sudo chmod -R 775 storage bootstrap/cache
```

### Step 2: Install PHP & Node Dependencies
```bash
composer install --no-dev --optimize-autoloader
npm install
npm run build
```

### Step 3: Configure Environment `.env`
Copy the template and edit environment settings:
```bash
cp .env.example .env
nano .env
```

Ensure production configuration values:
```ini
APP_NAME="Sapa Cosy Hotel"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://sapacosyhotel.vn

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sapacosyhotel_prod
DB_USERNAME=hotel_db_user
DB_PASSWORD=your_secure_password

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=info@sapacosyhotel.vn
MAIL_PASSWORD=your_smtp_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="info@sapacosyhotel.vn"
MAIL_FROM_NAME="${APP_NAME}"
```

### Step 4: Key Generation, Migration & Caching
```bash
php artisan key:generate --force
php artisan migrate --force
php artisan storage:link

# Optimize configuration and route caching
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache
```

---

## 🌐 3. Nginx Server Configuration

Create Nginx site configuration file at `/etc/nginx/sites-available/sapacosyhotel.vn`:

```nginx
server {
    listen 80;
    listen [::]:80;
    server_name sapacosyhotel.vn www.sapacosyhotel.vn;
    root /var/www/sapacosyhotel.vn/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

Enable site & reload Nginx:
```bash
sudo ln -s /etc/nginx/sites-available/sapacosyhotel.vn /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx
```

---

## 🔒 4. SSL & Security setup

Install free Let's Encrypt SSL certificate using Certbot:
```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d sapacosyhotel.vn -d www.sapacosyhotel.vn
```

---

## 🔄 5. Post-Deployment Checklist

- [ ] Verify website loads over HTTPS (`https://sapacosyhotel.vn`).
- [ ] Test booking form submission and verify receipt of emails.
- [ ] Log into `/login` admin portal and test updating room/service info.
- [ ] Test image upload via CKFinder in admin panel.
- [ ] Verify `APP_DEBUG=false` in `.env`.
