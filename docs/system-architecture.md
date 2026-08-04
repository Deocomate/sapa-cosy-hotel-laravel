# System Architecture

This document details the architectural design, component flow, data relationships, and infrastructure layer of the **Sapa Cosy Hotel** web application.

---

## 🏗️ 1. High-Level Architecture

The application follows the classic **Model-View-Controller (MVC)** architectural pattern provided by Laravel 11. It operates as a full-stack monolithic application serving Blade templates directly to client browsers while handling backend data management, mail dispatching, and media storage.

### High-Level Component Diagram

```mermaid
graph TD
    Client["Client Browser (Guest)"] -->|HTTP / HTTPS| WebServer["Web Server (Nginx / Apache)"]
    Admin["Admin User (Manager)"] -->|HTTPS (Auth Protected)| WebServer
    
    subgraph LaravelApp ["Laravel 11 Application Container"]
        Router["Route Dispatcher (routes/web.php)"]
        Middleware["Auth & Session Middleware"]
        
        subgraph Controllers ["Controllers Layer"]
            ClientCtrl["Client Controllers (HomeController, BookingController)"]
            AdminCtrl["Admin Controllers (RoomController, BlogController, etc.)"]
            AuthCtrl["Auth Controllers (LoginController)"]
        end
        
        subgraph ServicesLayer ["Services & Integration"]
            Mailer["Laravel Mailer (BookingMail)"]
            CKFinder["CKFinder Package (Media Management)"]
        end
        
        subgraph StorageLayer ["Data & Storage Layer"]
            QueryBuilder["Query Builder / DB Facade"]
            DB[(MySQL / MariaDB)]
            FileStorage["Local Disk Storage (public/storage)"]
        end
    end
    
    WebServer --> Router
    Router --> Middleware
    Middleware --> AuthCtrl
    Middleware --> ClientCtrl
    Middleware --> AdminCtrl
    
    ClientCtrl --> Mailer
    AdminCtrl --> CKFinder
    
    ClientCtrl --> QueryBuilder
    AdminCtrl --> QueryBuilder
    
    QueryBuilder --> DB
    CKFinder --> FileStorage
    Mailer -->|SMTP| ExternalSMTP["SMTP Server (Gmail / Mailgun)"]
    ExternalSMTP -->|Email Delivery| GuestInbox["Guest & Admin Inbox"]
```

---

## 🔄 2. Core Workflows & Data Flow

### 2.1 Public Guest Booking Workflow

```mermaid
sequenceDiagram
    autonumber
    actor Guest as Guest User
    participant View as Client Web Page (/phong-nghi)
    participant Ctrl as BookingController
    participant Mail as BookingMail (Laravel Mailer)
    participant SMTP as SMTP Relay Server

    Guest->>View: Fills Booking Form (Dates, Name, Phone, Email, Guests)
    View->>Ctrl: POST /booking (Form Data + CSRF Token)
    Ctrl->>Ctrl: Validate Form Data
    alt Validation Fails
        Ctrl-->>View: Redirect Back with Error Messages
    else Validation Succeeds
        Ctrl->>Mail: Instantiates BookingMail($validated)
        Ctrl->>SMTP: Send Email to Admin (MAIL_USERNAME)
        Ctrl->>SMTP: Send Email to Guest ($validated['email'])
        SMTP-->>Guest: Deliver Booking Confirmation Email
        Ctrl-->>View: Redirect Back with Flash Success Message ("Gửi thông tin thành công!")
    end
```

### 2.2 Admin Content Management & Media Workflow

```mermaid
sequenceDiagram
    autonumber
    actor Admin as Admin Manager
    participant Login as LoginController (/login)
    participant Middleware as Auth Middleware
    participant Controller as Resource Controller (e.g. RoomController)
    participant CKFinder as CKFinder Media Connector
    participant Storage as File System & DB

    Admin->>Login: Submit Credentials
    Login->>Middleware: Authenticate User Session
    Middleware-->>Admin: Session Established & Redirect to /admin/index

    Admin->>Controller: Create / Edit Room details
    opt Upload Image via Rich Text Editor
        Controller->>CKFinder: Open CKFinder Media Browser
        CKFinder->>Storage: Upload Image File to public/uploads/
        Storage-->>CKFinder: Return File Relative Path URL
    end
    Controller->>Storage: Save Room record to 'rooms' table
    Storage-->>Admin: Render Success Notification
```

---

## 🗄️ 3. Entity Relationship & Database Schema

The database design links hotel operations, guest reviews, marketing blogs, press publications, and location guides.

```mermaid
erDiagram
    USERS {
        bigint id PK
        string name
        string email UK
        string password
        timestamp email_verified_at
        timestamp created_at
        timestamp updated_at
    }

    HOTEL_INFO {
        bigint id PK
        string name
        string title
        longtext description
        string video_link
        longtext food_menu
        string address
        string contact_email
        string contact_phone
        string contact_hotline
        string facebook_link
        string zalo_link
        string map_link
    }

    ROOMS {
        bigint id PK
        string title
        string thumbnail
        string type
        longtext description
        bigint price
        longtext details
    }

    SERVICES {
        bigint id PK
        string title
        string thumbnail
        string type
        longtext description
        bigint price
        longtext details
    }

    REVIEWS {
        bigint id PK
        string customer_thumbnail
        string customer_name
        string customer_review
        string customer_address
        integer customer_rating
    }

    POSTS {
        bigint id PK
        string title
        longtext description
        string thumbnail
        string url
        string author
        timestamp created_at
    }

    BLOGS {
        bigint id PK
        string title
        longtext description
        string thumbnail
        longtext detail
        string author
        timestamp created_at
    }

    LOCATIONS {
        bigint id PK
        string title
        longtext description
        string thumbnail
        integer price
    }
```

---

## 🔐 4. Security Architecture

1. **Session & Authentication**:
   - Web guard standard Laravel authentication (`Illuminate\Support\Facades\Auth`).
   - Admin routes scoped behind `Route::middleware('auth')`.
2. **Data Sanitization & Injection Protection**:
   - Laravel Query Builder parameterized queries protect against SQL injection.
   - Blade `{{ $variable }}` auto-escaping prevents Cross-Site Scripting (XSS).
3. **File Upload Security**:
   - CKFinder security configuration limits uploaded file extensions and execution permissions in public upload folders.
