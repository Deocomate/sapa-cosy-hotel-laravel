# Codebase Summary

## 📂 1. Directory Overview

```
sapacosyhotel.vn/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/           # Admin Controllers (CRUD for hotel models)
│   │   │   │   ├── AdminController.php
│   │   │   │   ├── BlogController.php
│   │   │   │   ├── HotelInfoController.php
│   │   │   │   ├── LocationController.php
│   │   │   │   ├── PostController.php
│   │   │   │   ├── ReviewController.php
│   │   │   │   ├── RoomController.php
│   │   │   │   └── ServiceController.php
│   │   │   ├── Auth/            # Authentication Controller
│   │   │   │   └── LoginController.php
│   │   │   ├── Client/          # Public Guest Controllers
│   │   │   │   ├── BookingController.php
│   │   │   │   ├── ContactController.php
│   │   │   │   └── HomeController.php
│   │   │   ├── Database/        # Database Utility Controller
│   │   │   ├── Seeder/          # Seeder Utility Controller
│   │   │   └── Controller.php   # Base Controller
│   ├── Mail/                    # Mailable Classes
│   │   └── BookingMail.php
│   ├── Models/                  # Eloquent Models
│   │   └── User.php
│   └── Providers/               # Service Providers
├── config/                      # Application Configurations
│   ├── app.php
│   ├── database.php
│   ├── mail.php
│   └── ckfinder.php             # CKFinder Bridge Config
├── database/
│   └── migrations/              # Database Schema Migrations
│       ├── 0001_01_01_000000_create_users_table.php
│       ├── 0001_01_01_000001_create_cache_table.php
│       ├── 0001_01_01_000002_create_jobs_table.php
│       └── 2024_09_29_155855_create_init_db_table.php
├── public/                      # Static Assets & Storage Link
├── resources/
│   └── views/
│       ├── admin/               # Admin Views & Modules
│       ├── client/              # Guest Views & Modules
│       ├── components/          # Reusable Blade Components
│       └── mail/                # Email Templates
├── routes/
│   └── web.php                  # Web Routes Definition
└── vite.config.js               # Vite Asset Bundler Config
```

---

## 🗄️ 2. Core Modules & Controllers

### 2.1 Public Client Controllers (`App\Http\Controllers\Client`)
- **`HomeController`**: Handles public rendering for home page, blogs list, blog detail, services list, service detail, press articles, room list, and room detail. Uses Laravel `DB` facade to query tables directly (`services`, `rooms`, `reviews`, `locations`, `blogs`, `posts`).
- **`BookingController`**: Handles booking request POST submissions. Validates input (`checkInDate`, `checkOutDate`, `fullName`, `phoneNumber`, `email`, `adults`, `children`) and dispatches `BookingMail` emails to both the admin and the guest.
- **`ContactController`**: Renders contact page with hotel contact details.

### 2.2 Admin Resource Controllers (`App\Http\Controllers\Admin`)
- **`HotelInfoController`**: Resource controller for hotel profile details (`hotel_info`).
- **`RoomController`**: Resource controller for room accommodations (`rooms`).
- **`ServiceController`**: Resource controller for hotel services (`services`).
- **`ReviewController`**: Resource controller for customer reviews (`reviews`).
- **`PostController`**: Resource controller for press publications (`posts`).
- **`BlogController`**: Resource controller for travel blogs (`blogs`).
- **`LocationController`**: Resource controller for tourist spots (`locations`).
- **`AdminController`**: Handles admin password reset logic.

### 2.3 Auth & Utility Controllers
- **`LoginController`**: Handles admin login view, authentication check (`admin.authenticate`), and logout.
- **`DatabaseController` / `SeederController`**: Utility controllers for developer DB setup.

---

## 💾 3. Database Schema Overview

Defined in migration `2024_09_29_155855_create_init_db_table.php`:

| Table Name | Description | Key Fields |
|------------|-------------|------------|
| `users` | Admin users & authentication | `id`, `name`, `email`, `password`, `timestamps` |
| `hotel_info` | Hotel global parameters | `id`, `name`, `title`, `description`, `video_link`, `food_menu`, `address`, `contact_email`, `contact_phone`, `contact_hotline`, `facebook_link`, `zalo_link`, `map_link` |
| `services` | Hotel service offerings | `id`, `title`, `thumbnail`, `type`, `description`, `price`, `details` |
| `rooms` | Accommodation rooms | `id`, `title`, `thumbnail`, `type`, `description`, `price`, `details` |
| `reviews` | Guest testimonials | `id`, `customer_thumbnail`, `customer_name`, `customer_review`, `customer_address`, `customer_rating` |
| `posts` | Press news articles | `id`, `title`, `description`, `thumbnail`, `url`, `author`, `created_at` |
| `blogs` | Travel blog articles | `id`, `title`, `description`, `thumbnail`, `detail`, `author`, `created_at` |
| `locations` | Nearby attractions | `id`, `title`, `description`, `thumbnail`, `price` |

---

## 📧 4. Mail & Notification System

- **Mailable**: `App\Mail\BookingMail`
- **Trigger**: `BookingController@booking`
- **Recipient 1**: `env("MAIL_USERNAME")` (Hotel Admin)
- **Recipient 2**: Guest's email (`$validated["email"]`)
- **Template**: `resources/views/mail/booking.blade.php`

---

## 📦 5. Third-Party Libraries & Dependencies

- **`ckfinder/ckfinder-laravel-package`**: Embedded file browser and uploader for rich-text editors in admin panel.
- **`barryvdh/laravel-debugbar`**: Developer debug toolbar for performance & query monitoring.
- **`barryvdh/laravel-ide-helper`**: IDE auto-completion helper generation.
