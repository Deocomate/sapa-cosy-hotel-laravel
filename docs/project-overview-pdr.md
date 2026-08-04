# Project Overview & Product Development Requirements (PDR)

## 📌 1. Project Background

**Sapa Cosy Hotel** is a hospitality business located in Sa Pa town, Lào Cai province, Vietnam — a popular eco-tourism and mountain resort destination in northern Vietnam.

The primary goal of this web application is to present hotel accommodations, local dining options, tour services, and travel advice to prospective visitors, while enabling fast and reliable booking requests and providing hotel managers with an easy-to-use content management administrative dashboard.

---

## 🎯 2. Product Objectives

1. **Brand Visibility**: Present Sapa Cosy Hotel with high-quality visual content, location details, videos, and guest testimonials.
2. **Booking Conversion**: Allow prospective guests to select check-in/check-out dates, guest count, and contact information, dispatching instant email alerts to both guest and management.
3. **Information Hub**: Showcase local attractions, hotel services, traditional food menus, press articles, and travel blog posts.
4. **Administrative Control**: Enable non-technical hotel managers to manage rooms, services, blog posts, news, reviews, and hotel contact details without modifying code.

---

## 👥 3. Target User Personas

### Persona A: The Traveler & Explorer (Guest / Client)
- **Goal**: Search for hotels in Sa Pa, compare room options and prices, review food menus and local sights, and make room reservations.
- **Pain Points**: Lack of reliable online information about Sa Pa hotels, unclear pricing, difficult booking channels.
- **Needs**: Fast mobile-responsive website, clear room descriptions & photos, direct booking inquiry form.

### Persona B: Hotel Admin / Manager
- **Goal**: Maintain updated room rates, update hotel phone/Zalo/address details, publish new blog articles, and add customer reviews.
- **Pain Points**: Complex CMS workflows or manual code changes needed for basic updates.
- **Needs**: Simple password-protected dashboard with intuitive forms and rich-text/image upload support (CKFinder).

---

## 📑 4. Functional Requirements

### 4.1 Client Module (Public Website)
- **Home Page (`/`)**: Displays hero banner, hotel introduction video, featured room list, services, guest reviews, and local destination highlights.
- **Room List & Detail (`/phong-nghi`, `/chi-tiet-phong/{id}`)**: Detailed view of available room types (deluxe, family room, suite) with pricing and amenities.
- **Services & Menu (`/dich-vu`, `/dich-vu-chi-tiet/{id}`)**: Showcases hotel services (e.g., motorbike rental, herbal bath, guided tours, local dining).
- **Travel Blog (`/bai-viet`, `/bai-viet-chi-tiet/{id}`)**: In-depth articles about Sa Pa culture, Fansipan trekking tips, and travel guides.
- **Press & Media (`/bai-bao`)**: External media publications and news features.
- **Contact Page (`/lien-he`)**: Contact numbers, email, interactive map link, Zalo & Facebook links.
- **Booking Form (`POST /booking`)**: Form validation for check-in/out dates, contact details, guest numbers; sends confirmation emails via `BookingMail`.

### 4.2 Admin Module (Dashboard)
- **Authentication (`/login`, `/logout`, `/admin/updatePassword`)**: Secure admin access.
- **Hotel Info Manager (`/admin/hotel-info`)**: Edit hotel name, address, hotline, Zalo link, Facebook link, map link, video link, and food menu.
- **Rooms Manager (`/admin/rooms`)**: CRUD operations for room titles, thumbnails, types, prices, and detail descriptions.
- **Services Manager (`/admin/services`)**: CRUD operations for services offered.
- **Reviews Manager (`/admin/reviews`)**: Manage guest feedback, customer ratings, and testimonials.
- **Posts & Blogs Manager (`/admin/posts`, `/admin/blogs`)**: Publish and edit travel articles and press updates.
- **Locations Manager (`/admin/locations`)**: Manage nearby tourist spots and entry/tour prices.
- **Media Manager (`/admin/ckfinder/*`)**: Embedded CKFinder file manager for rich text images.

---

## ⚡ 5. Non-Functional Requirements

- **Performance**: Lightweight Blade rendering with optimized Vite assets.
- **SEO & Search Engine Optimization**: Structured URLs (`/phong-nghi`, `/bai-viet-chi-tiet/{id}`), semantic HTML5 tags, and descriptive meta titles.
- **Responsiveness**: Mobile-first responsive UI supporting smartphones, tablets, and desktop displays.
- **Reliability & Security**: Form validation, CSRF protection on POST routes, protected admin routes with `auth` middleware.
