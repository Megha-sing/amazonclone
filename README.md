# 🛒 Amazon Clone
A full-stack Amazon-inspired e-commerce web application built with PHP, MySQL, and phpMyAdmin.
It replicates key features of Amazon, including product browsing, user authentication, cart management, and order checkout.

## 🚀 Features
- Amazon-like UI with modern and clean design.
- User Authentication (Sign Up / Login / Logout)
- Responsive Layout for desktop and mobile views.
- Product Listing with images, titles, and prices.
- Hover Effects and smooth animations for better UX.

## 🛠️ Tech Stack
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL (phpMyAdmin)

## 📸 Screenshots
<img width="593" height="317" alt="image" src="https://github.com/user-attachments/assets/eda34adb-6a8f-406d-90b6-68f92dcb0139" />
<img width="589" height="317" alt="image" src="https://github.com/user-attachments/assets/b1bdb4ba-87d9-484d-84db-174ed4c9e341" />
<img width="582" height="271" alt="image" src="https://github.com/user-attachments/assets/c25f62bd-9cbe-4825-985f-ea19c091eb22" />
<img width="589" height="308" alt="image" src="https://github.com/user-attachments/assets/5482b687-ecd6-4fa0-acf7-e417729cb80a" />
<img width="589" height="317" alt="image" src="https://github.com/user-attachments/assets/134ef389-3d18-46bb-b3be-6e68b4d712ac" />
<img width="595" height="313" alt="image" src="https://github.com/user-attachments/assets/00702e25-67e0-46e8-a1fe-051fb6e77498" />

## ⚙️ Installation
1. **Clone the Repository**

```bash
git clone https://github.com/yourusername/amazon-clone.git
```
2. **Move Project to Server Folder**
Place the project inside your server directory (e.g., htdocs for XAMPP).

3. **Database Setup**

- Open phpMyAdmin in your browser.
- Create a new database (e.g., amazon_clone).
- Import the provided SQL file (database.sql) into the new database.

4. **Configure Database Connection**
Update the config.php file with your database credentials:

```bash
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amazon_clone";
```
5. **Run the Project**
Start Apache & MySQL from XAMPP and visit:

```bash
http://localhost/amazon-clone
```
