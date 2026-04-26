# Functional Requirements Document (FRD)

## Project: Reminder-Doc-App

## Platform: Laravel 13 (Web Application)

---

## 1. Overview

**Reminder-Doc-App** is a minimal web application that allows users to track long-term expiring documents (e.g., passports, driving licenses, insurance policies) and receive **in-app reminders** based on expiry dates.

This MVP focuses on core CRUD operations, date-based logic, and a simple notification mechanism within the application (no external communication like email).

---

## 2. Objectives

* Provide a simple system to manage expiring documents
* Display upcoming and expired reminders inside the app
* Demonstrate Laravel 13 fundamentals:

  * Routing
  * Controllers
  * Eloquent ORM
  * Scheduling (optional but recommended)
  * Basic authentication (custom or minimal)

---

## 3. Scope

### In Scope (MVP)

* Custom user authentication (no Laravel Breeze)
* Document CRUD
* Expiry tracking
* In-app notification system
* Dashboard overview

### Out of Scope

* Email notifications
* Categories/tags
* Third-party integrations
* Mobile responsiveness (optional for MVP)
* APIs (optional)

---

## 4. User Roles

### 4.1 Registered User

* Manages personal documents
* Views reminders inside the system

---

## 5. Functional Requirements

---

### 5.1 Authentication (Custom Implementation)

**FR-1: User Registration**

* User can register with:

  * Name
  * Email
  * Password (hashed)

**FR-2: User Login**

* User logs in using email and password

**FR-3: Logout**

* User can log out securely

> Note: Implement using Laravel session-based auth (manual or lightweight guard setup)

---

### 5.2 Document Management

**FR-4: Add Document**

* Fields:

  * Document Name
  * Expiry Date
  * Reminder Days (integer, e.g., 30)
  * Notes (optional)

**FR-5: View Documents**

* Display list with:

  * Name
  * Expiry Date
  * Days Remaining
  * Status

**FR-6: Edit Document**

* User can update all fields

**FR-7: Delete Document**

* User can delete a document

---

### 5.3 Reminder System (In-App Only)

**FR-8: Reminder Logic**

* System calculates reminders dynamically based on:

  * `expiry_date`
  * `reminder_days`

**FR-9: Reminder Visibility**

* Reminder appears inside:

  * Dashboard
  * Notification section (simple list)

**FR-10: Status Indicators**

Each document must have a computed status:

* **Active** → Not near expiry
* **Expiring Soon** → Within reminder_days
* **Expired** → Past expiry date

---

### 5.4 Dashboard

**FR-11: Summary Cards**

* Total documents
* Expiring soon
* Expired

**FR-12: Upcoming Expiry List**

* Sorted by nearest expiry date
* Highlight urgent items

---

### 5.5 Optional (Recommended for Portfolio)

**FR-13: Daily Status Update (Scheduler)**

* Laravel Scheduler updates document statuses daily
* Not required but demonstrates backend capability

---

## 6. Business Logic

### 6.1 Status Calculation

* **Expired**

  * `expiry_date < today`

* **Expiring Soon**

  * `today >= (expiry_date - reminder_days)`

* **Active**

  * Otherwise

---

### 6.2 Days Remaining

* `days_remaining = expiry_date - today`

---

## 7. Non-Functional Requirements

### 7.1 Performance

* Should support basic usage (single user / small dataset)
* Fast page loads (< 2 seconds)

### 7.2 Security

* Password hashing (bcrypt)
* CSRF protection
* Session-based authentication

### 7.3 Usability

* Clean, minimal UI
* Simple navigation (Dashboard / Documents)

### 7.4 Maintainability

* Follow MVC pattern
* Clean controller-service separation (optional)

---

## 8. Data Model

### Users Table

* id
* name
* email
* password
* timestamps

---

### Documents Table

* id
* user_id (FK)
* name
* expiry_date (date)
* reminder_days (integer)
* notes (nullable)
* timestamps

---

## 9. System Architecture

* Backend: Laravel 13
* Database: MySQL / SQLite
* Frontend: Blade + Tailwind/Bootstrap
* Auth: Custom session-based
* Scheduler: Laravel Cron (optional)

---

## 10. UI Pages (MVP)

* Login Page
* Register Page
* Dashboard
* Document List Page
* Add/Edit Document Page

---

## 11. Assumptions

* Users manually input document details
* Notifications are only visible inside the app
* Single-user usage scenario (portfolio focus)

---

## 12. Risks & Limitations

* No real notifications outside app
* No multi-device sync considerations
* No role-based access

---

## 13. Future Enhancements

* Email/SMS notifications
* File upload (store document scans)
* Categories/tags
* API support (mobile app)
* Calendar integration

---

## 14. Suggested Folder Structure (Laravel)

* `app/Models/Document.php`
* `app/Http/Controllers/DocumentController.php`
* `app/Services/ReminderService.php` (optional)
* `resources/views/` (Blade templates)

---

## Portfolio Enhancement Ideas

* Add a **Notification Bell UI** (in-app alerts dropdown)
* Show **real-time status badges** (color-coded)
* Include a **README explaining architectural decisions**