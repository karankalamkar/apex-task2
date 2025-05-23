# Task 2 - PHP CRUD Blog Application

🚀 **Internship Task for ApexPlanet Pvt. Ltd.**

This is a simple blog-style web application built with **PHP** and **MySQL**, allowing users to **Create, Read, Update, and Delete (CRUD)** posts. It also includes **user authentication** with session management and password hashing.

---

## 🔧 Features

- ✅ User registration and login
- 🔒 Secure password storage using PHP's `password_hash()`
- 📝 Create, read, edit, and delete blog posts
- 🔍 Search functionality
- 📄 Pagination for post listings
- 🎨 Simple and responsive styling with `style.css`

---

## 🗂️ Project Structure

styled_blog_app/
│
├── db.php # Database connection
├── register.php # User registration page
├── login.php # User login page
├── logout.php # Log out and destroy session
├── dashboard.php # Main page showing posts (after login)
├── edit.php # Edit post page
├── delete.php # Delete post handler
├── style.css # Styles for all pages
└── README.md # Project documentation

yaml
Copy
Edit

---

## 💾 Database Schema

**Database Name:** `blog`

### users table
| Column    | Type         |
|-----------|--------------|
| id        | INT (AUTO_INCREMENT) |
| username  | VARCHAR(100) |
| password  | VARCHAR(255) |

### posts table
| Column     | Type         |
|------------|--------------|
| id         | INT (AUTO_INCREMENT) |
| title      | VARCHAR(255) |
| content    | TEXT         |
| created_at | DATETIME     |

---

## 🛠️ Setup Instructions

1. Place the project folder inside `C:/xampp/htdocs/`
2. Start **XAMPP** and run **Apache** and **MySQL**
3. Go to `http://localhost/phpmyadmin` and create a database named `blog`
4. Import the SQL schema to create `users` and `posts` tables
5. Visit the app in your browser:  
http://localhost/styled_blog_app

yaml
Copy
Edit

---

## 🧠 Notes

- You must register before logging in.
- Posts can be added only after login.
- Sessions keep the user logged in until logout.

---

## ✅ Deliverables Completed

- ✔ Functional CRUD application
- ✔ User authentication with session handling
- ✔ Database schema
- ✔ Search and pagination
- ✔ Styled UI
- ✔ Uploaded to GitHub

---

## ✨ Completed As Part of

**ApexPlanet Pvt. Ltd. Internship - Task 2**


## 📬 Contact

**karan Kalamkar**  
[GitHub: @karankalamkar](https://github.com/karankalamkar)
