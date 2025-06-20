<<<<<<< HEAD
# Task Management Web Application

A web-based task management system built with PHP and CodeIgniter 4.

## Project Overview

This application allows users to register, log in, and manage their tasks efficiently. It supports user authentication, role-based access (admin/user), CRUD operations for tasks, file uploads, and a RESTful API for task management. Admin registration is protected by a registration code.

## Features

- User Registration and Login
- Role-Based Access Control (RBAC)
- Admin Registration Code (only authorized users can register as admin)
- CRUD Module for Tasks
- File Upload and Media Handling
- RESTful API for Tasks
- Dashboard for users and admin

## Technologies Used

- PHP with CodeIgniter 4 Framework
- MySQL Database
- Bootstrap (UI)
- Git and GitHub for version control
- Deployed on a live web server (e.g., 000webhost, InfinityFree, or XAMPP for local)

## Setup Instructions

1. **Clone the repository:**
   ```
   git clone <your-repo-url>
   ```
2. **Import the database:**
   - Create a MySQL database (e.g., `ta1_db`).
   - Import the provided SQL file (if available) or create tables as needed.
3. **Configure the environment:**
   - Update `app/Config/Database.php` with your database credentials.
   - Update `app/Config/App.php` with your base URL (e.g., `http://localhost/TA1/public/`).
4. **Set writable permissions:**
   - Ensure `public/uploads/` is writable for file uploads.
5. **Run the app:**
   - Start Apache and MySQL (if using XAMPP).
   - Visit `http://localhost/TA1/public/` in your browser.

## Registration Code for Admin

- To register as an **admin**, you must enter the registration code: `MYSECRET2024`.
- Regular users can register without a code.

## API Endpoints

- **List all tasks:**
  - `GET /api/tasks`
- **List tasks for a user:**
  - `GET /api/tasks?user_id={id}`
- **Create a task:**
  - `POST /tasks` (requires authentication)
- **Update a task:**
  - `POST /tasks/update/{id}` (requires authentication)
- **Delete a task:**
  - `GET /tasks/delete/{id}` (requires authentication)

## Testing with Postman

- **Register User:**
  - `POST /register` with fields: `username`, `email`, `password`, `role` (`user` or `admin`), and `reg_code` (only for admin)
- **Create Task:**
  - `POST /tasks` with fields: `title`, `description`, `status`, `priority`, `due_date`, and optional `attachment`
- **CSRF:**
  - If CSRF protection is enabled, include the CSRF token in your requests.

## Default Login Credentials

- **Admin:** admin124@gmail.com / admin124
- **User:** user124@gmail.com / user124

## Deployment

- Upload all files to your hosting server.
- Set up the database and update configuration files as above.
- Ensure file permissions for uploads.

## License

This project is licensed under the MIT License.
=======
Here’s a professional `README.md` for your **Terminal Assessment Task (Task Management System)** built with **CodeIgniter 4**:

---

```markdown
# 📝 Terminal Assessment Task – Task Management System

This is a **Task Management System** built using **CodeIgniter 4**, **Bootstrap**, and **MySQL**. It supports user registration, login, task CRUD, file attachments, and an admin panel for managing all users' tasks.

---

## 🚀 Features

### 👤 User Features
- Register and log in securely
- Create, view, edit, and delete personal tasks
- Attach files to tasks (with size limit)
- Responsive UI built with Bootstrap

### 🔐 Admin Features
- Admin dashboard with all user data
- View all users' tasks
- Edit and delete any task
- View task attachments
- Role-based access control

---

## 🛠️ Tech Stack

| Layer        | Technology         |
|-------------|--------------------|
| Backend      | CodeIgniter 4 (PHP) |
| Frontend     | Bootstrap 5         |
| Database     | MySQL (via XAMPP)   |
| Hosting      | InfinityFree (optional) |
| Auth System  | CodeIgniter Sessions |
| File Uploads | File storage in `/public/uploads/` |

---

## 📁 Project Structure

```

/app
├── Controllers
│   ├── AuthController.php
│   └── TaskController.php
├── Models
│   ├── UserModel.php
│   └── TaskModel.php
├── Views
│   ├── tasks/
│   ├── auth/
│   └── admin/

````

---

## 🔧 Setup Instructions

### 1. Clone the repo
```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
````

### 2. Install dependencies & start XAMPP

* Place the project in `htdocs`
* Start Apache and MySQL from XAMPP

### 3. Import the database

* Go to `http://localhost/phpmyadmin`
* Import the provided SQL file (e.g., `database.sql`)

### 4. Configure environment

Copy `.env.example` to `.env` and update:

```
database.default.hostname = localhost
database.default.database = your_database
database.default.username = root
database.default.password = 
```

### 5. Run the app

Visit:

```
http://localhost/your-project-folder/public
```

---

## 🖼️ Screenshots

| Login Page                      | Admin Dashboard                           |
| ------------------------------- | ----------------------------------------- |
| ![Login](screenshots/login.png) | ![Admin](screenshots/admin_dashboard.png) |

---

## 📌 Notes

* Upload limit: Files must be under **2MB**
* Admin users are identified by `role = 'admin'` in the `users` table
* Make sure the `/public/uploads/` folder is writable

---

## 🙋 Author

**Name:** Guro, Amel B.
**Course:** BSIT
**Assessment:** Terminal Assessment Task
**School Year:** 2024-2025

---

## 📃 License

This project is for academic purposes only.

```

---


```
>>>>>>> 7344adf3e85e06a844371e128c4d94b634f8ebfe
