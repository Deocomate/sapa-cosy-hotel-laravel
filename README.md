# Sapa Cosy Hotel

Official web portal and administrative management system for **Sapa Cosy Hotel** — a hotel located in Sa Pa, Lào Cai, Vietnam. Built with **Laravel 11**, **PHP 8.2+**, **Blade Templates**, and **Vite**.

---

## 🌟 Overview

Sapa Cosy Hotel website provides a seamless platform for guests to explore hotel accommodations, tourist attractions, local services, and travel blogs, while allowing direct booking inquiries via automated email notifications. It includes a comprehensive administration dashboard for content management.

### Key Features
- 🏠 **Accommodations & Rooms**: Browse room types, details, and pricing.
- 🚴 **Services**: List hotel activities, dining menus, and local tours.
- 🏞️ **Location Guide**: Explore nearby attractions in Sa Pa and Lào Cai.
- 📝 **Blog & Media**: Travel stories, news, and press publications.
- 📬 **Booking System**: Instant booking request form sending email confirmations to both hotel management and guests.
- 🔐 **Admin Portal**: Full resource management (Rooms, Services, Posts, Blogs, Reviews, Hotel Info, Locations) with CKFinder rich-media file manager integration.

---

## 🛠️ Tech Stack

- **Backend**: PHP 8.2+ / Laravel 11.x
- **Frontend**: Blade Templating, HTML5, CSS3, JavaScript, Vite
- **Database**: MySQL / MariaDB (Supports SQLite)
- **Rich Text / File Manager**: CKFinder Laravel Package
- **Mail Engine**: Laravel Mailer (`BookingMail`)
- **Developer Tools**: Laravel Debugbar, Laravel IDE Helper, Pint

---

## 🚀 Getting Started

### Requirements
- PHP >= 8.2 (extensions: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath)
- Composer >= 2.x
- Node.js >= 18.x & NPM
- MySQL / MariaDB

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-repo/sapacosyhotel.vn.git
   cd sapacosyhotel.vn
   ```

2. **Install PHP and Node dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment File**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Update `.env` database and mail credentials:
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_sapacosyhotel
   DB_USERNAME=root
   DB_PASSWORD=

   MAIL_MAILER=smtp
   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=your-email@gmail.com
   MAIL_PASSWORD=your-app-password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=your-email@gmail.com
   MAIL_FROM_NAME="${APP_NAME}"
   ```

4. **Run Database Migrations**:
   ```bash
   php artisan migrate
   ```

5. **Link Storage**:
   ```bash
   php artisan storage:link
   ```

6. **Start Development Servers**:
   ```bash
   npm run dev
   php artisan serve
   ```

---

## 📁 Project Structure

```
sapacosyhotel.vn/
├── app/
│   ├── Http/Controllers/
│   │   ├── Admin/         # Admin resource controllers
│   │   ├── Client/        # Public web controllers
│   │   └── Auth/          # Authentication controller
│   ├── Mail/              # Booking notification email template
│   └── Models/            # Eloquent User model & schemas
├── config/                # Application & CKFinder configurations
├── database/
│   └── migrations/        # Database table structures
├── public/                # Public assets & uploaded media
├── resources/
│   └── views/
│       ├── admin/         # Admin Blade views & dashboard
│       ├── client/        # Guest-facing Blade templates
│       └── mail/          # Email Blade templates
├── routes/
│   └── web.php            # Client and Admin route definitions
└── docs/                  # Detailed project documentation
```

---

## 📚 Documentation

Detailed documentation is available in the [`docs/`](./docs) directory:

- [Project Overview & PDR](./docs/project-overview-pdr.md)
- [Codebase Summary](./docs/codebase-summary.md)
- [Code Standards](./docs/code-standards.md)
- [System Architecture](./docs/system-architecture.md)
- [Project Roadmap](./docs/project-roadmap.md)
- [Deployment Guide](./docs/deployment-guide.md)
- [Design Guidelines](./docs/design-guidelines.md)
