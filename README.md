# Computer Science School Project

This is my Computer Science school project built using **HTML, CSS, JavaScript, PHP, and MySQL**. It includes a login system, signup system, user session handling, profile dropdown, and account update page.

## 🚀 Features
- User signup and login (PHP + MySQL)
- Password hashing (`password_hash`)
- Session-based authentication (`$_SESSION`)
- Logout system
- Update account page
- Search system (SQL LIKE query)
- JavaScript dropdown menu
- Organized folder structure

## 🗂 Folder Structure
Computer-Science-School-Project/
├─ php/          # Backend PHP files (login, signup, auth check, update account)
├─ css/          # Styling files
├─ js/           # JavaScript scripts
├─ images/       # Screenshots / assets
├─ database/     # SQL export for MySQL
└─ index.html    # Main page

## 🛠 Technologies Used
| Technology | Purpose |
|------------|-----------------------------|
| HTML | Page structure |
| CSS | Styling |
| JavaScript | UX and dropdowns |
| PHP | Backend logic and authentication |
| MySQL | Database for users |

## 📥 Setup Instructions (How to Run)
1. Install **XAMPP / WAMP** (or any local PHP server).
2. Copy this project folder into:
   - `htdocs/` (for XAMPP)
   - `www/` (for WAMP)
3. Import `database/project.sql` into **phpMyAdmin**.
4. Edit `php/config.php` with your database login details:
   $conn = new mysqli('localhost', 'root', '', 'your_database_name');
5. Open your browser and go to:
   http://localhost/Computer-Science-School-Project/index.html

## 🔐 Default Login (Example)
Email: `test@example.com`  
Password: `123456`

(or register a new user using signup.)

## 📸 Screenshots (Optional)
Add images to the `images/` folder, such as:
- `login.png`
- `dropdown.png`
- `database_structure.png`

To display a screenshot in the README:
![Login Page](images/login.png)

## 📜 License
This project is licensed under the **MIT License**. You are free to use or modify this project — please credit me.

## 📌 Final Notes
This project was created for educational purposes. It demonstrates full-stack web development with authentication and can be expanded in the future.

**Thank you for viewing my project!**
GitHub: @TbazPlaz
