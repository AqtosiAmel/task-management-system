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
