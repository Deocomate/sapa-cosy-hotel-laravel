# Project Roadmap

This document outlines the implementation status of features in **Sapa Cosy Hotel** and details planned upcoming enhancements.

---

## 🚦 Implementation Status

### Legend
- ✅ **Completed**: Implemented, tested, and operational.
- 🚧 **In Progress**: Partially implemented or in refinement.
- 📋 **Planned**: Scheduled for upcoming development iterations.

---

## 🎯 Phase 1: Core System & Public Website (Completed)

| Feature | Status | Description |
|---------|--------|-------------|
| **Laravel 11 Base Setup** | ✅ Completed | Configured Laravel 11, Vite asset pipeline, and SQLite/MySQL support. |
| **Home Page Module** | ✅ Completed | Displays hotel video, rooms, services, reviews, and destinations. |
| **Room Showcase & Detail** | ✅ Completed | Interactive room listings and individual room detail view. |
| **Services & Dining Menu** | ✅ Completed | Presentation of hotel services, local cuisine, and food menus. |
| **Blog & Press News** | ✅ Completed | Travel stories and news coverage modules. |
| **Contact & Map Integration** | ✅ Completed | Contact details, phone hotlines, Zalo, Facebook, and map links. |
| **Booking Request Engine** | ✅ Completed | Form validation and dual email notification (`BookingMail`). |

---

## 🎯 Phase 2: Administrative Dashboard & CMS (Completed)

| Feature | Status | Description |
|---------|--------|-------------|
| **Admin Auth System** | ✅ Completed | Password-protected admin login, logout, and password update. |
| **Resource CRUD Controllers** | ✅ Completed | Admin controllers for Rooms, Services, Blogs, Posts, Reviews, and Locations. |
| **Hotel Profile Config** | ✅ Completed | Centralized admin form for updating hotel contact details & social links. |
| **CKFinder Integration** | ✅ Completed | Integrated rich text media browser and image manager. |

---

## 🎯 Phase 3: Immediate Architecture & Quality Enhancements (In Progress)

| Feature | Status | Description |
|---------|--------|-------------|
| **Eloquent Models Migration** | 🚧 In Progress | Refactor direct `\DB::table()` queries in client controllers to Eloquent models (`Room`, `Service`, `Blog`, `Post`, `Review`, `Location`). |
| **Seeder & Factory Setup** | 🚧 In Progress | Replace placeholder `SeederController` with official Laravel Database Seeders & Factories. |
| **Automated Unit & Feature Tests**| 🚧 In Progress | Add Pest PHP / PHPUnit tests for booking form validation and admin auth routes. |
| **SEO Meta Tags Optimization** | 🚧 In Progress | Add dynamic Open Graph (`og:image`, `og:title`) tags for room and blog detail pages. |

---

## 🎯 Phase 4: Future Features & Expansion (Planned)

| Feature | Status | Description |
|---------|--------|-------------|
| **Online Room Calendar & Availability** | 📋 Planned | Real-time availability check based on check-in/out date selection. |
| **VietQR / SePay Payment Gateway** | 📋 Planned | QR code deposit payment integration for instant booking confirmation. |
| **Multi-language Support (VI / EN)** | 📋 Planned | Dual language toggle for foreign eco-tourists. |
| **Customer Review Submission** | 📋 Planned | Allow verified guests to submit reviews directly on the client site (subject to admin approval). |
| **SMS / Zalo ZNS Notification** | 📋 Planned | Send instant Zalo ZNS booking notifications to hotel managers. |
