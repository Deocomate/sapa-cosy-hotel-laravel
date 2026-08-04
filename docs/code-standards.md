# Code Standards & Guidelines

This document outlines the coding standards, patterns, and conventions followed in the **Sapa Cosy Hotel** project.

---

## 💻 1. PHP & Laravel Conventions

### 1.1 Code Style & Formatting
- **PSR-12 Compliance**: All PHP code must adhere to PSR-12 code style guidelines.
- **Laravel Pint**: Code formatting is enforced using Laravel Pint (`vendor/bin/pint`). Run `composer exec pint` before committing code changes.
- **Indentation**: 4 spaces per indentation level.
- **Strict Types & Declarations**: Use type hints for controller parameters and function return types where appropriate.

### 1.2 Naming Conventions
- **Classes**: PascalCase (`HomeController`, `BookingController`, `BookingMail`).
- **Methods**: camelCase for framework/standard methods (`trang_chu`, `bai_viet_chi_tiet`, `updatePassword`).
- **Database Tables**: snake_case, plural or descriptive nouns (`hotel_info`, `services`, `rooms`, `reviews`, `posts`, `blogs`, `locations`).
- **Blade Views**: snake_case or kebab-case inside module folders (`client.modules.trang_chu.index`, `client.modules.phong.detail`).

---

## 🗃️ 2. Database & Data Access Patterns

### 2.1 Direct Query Builder (`\DB::table`)
Currently, public client controllers read data via Laravel Query Builder (`\DB::table('table_name')`).

**Best Practice Guideline**:
- For simple read-only listing views, direct `DB::table()` is performant.
- For complex domain logic, data mutation, or model events, Eloquent Models (`App\Models\*`) are recommended for code readability and maintainability.

### 2.2 Input Validation & Security
- **Request Validation**: Always validate user input in controllers or Form Request classes before processing.
  ```php
  $validated = $request->validate([
      'checkInDate' => 'required|date',
      'checkOutDate' => 'required|date|after:checkInDate',
      'fullName' => 'required|string|max:255',
      'phoneNumber' => 'required|string|max:50',
      'email' => 'required|email|max:255',
      'adults' => 'required|integer|min:1',
      'children' => 'required|integer|min:0',
  ]);
  ```
- **CSRF Protection**: All POST/PUT/DELETE forms in Blade must include the `@csrf` directive.
- **SQL Injection Prevention**: Avoid raw SQL string concatenation; rely on parameterized Query Builder or Eloquent queries.

---

## 🎨 3. Blade & Frontend Architecture

### 3.1 Layout & Component Separation
- **Layout Templates**: Base layouts are located in `resources/views/client/layouts/` and `resources/views/admin/layouts/`.
- **Module Structure**: Modular Blade files are organized under `resources/views/client/modules/<feature_name>/`.
  - `index.blade.php`: Listing view.
  - `detail.blade.php`: Detailed entity view.
- **Reusable Components**: Buttons, headers, footers, navigation, and modal forms reside in `resources/views/components/` or `resources/views/client/components/`.

### 3.2 Asset Management (Vite)
- Compile CSS and JS assets via Vite:
  ```blade
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  ```
- Static assets (images, logos, icons) should be placed in `public/assets/` or `public/images/`.

---

## 🛡️ 4. Security & Middleware Guidelines

1. **Admin Authorization**:
   All administrative routes must be registered inside the `admin.` route group protected by the `auth` middleware:
   ```php
   Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
       // Admin routes
   });
   ```
2. **Environment & Credentials**:
   - Never commit sensitive database credentials, API keys, or mail server passwords to Git.
   - Use `.env.example` as a reference template for required environment variables.
