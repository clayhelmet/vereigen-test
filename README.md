Web Test Application - README

This is a dynamic web application with a landing page, user form submission, and an admin dashboard to manage form submissions. The system includes user authentication, form validation, and stores the form data in a MySQL database.

Project Structure:
web_test/
│
├── index.php            # Landing page that contains the form
├── login.php            # Login page for the admin to access the dashboard
├── logout.php           # Handles logout for admin users
├── submit_request.php   # Handles form submissions and inserts data into the database
├── dashboard.php        # Admin dashboard to view and manage form submissions
├── delete.php           # Handles deletion of form submissions from the database
├── config.php           # Database connection configuration
├── css/
       └── style.css        # General styling for the landing page
       └── login.css            # Styling for the login page


Prerequisites
To run this application, make sure you have the following installed:

XAMPP/WAMP/MAMP or any local web server stack that supports:
PHP 7.0 or higher
MySQL Database
Browser: Google Chrome, Mozilla Firefox, or any modern browser.

//Installation
Setup Database 
CREATE DATABASE web_test;

CREATE TABLE request (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    work_mail VARCHAR(255) NOT NULL,
    com_name VARCHAR(255) NOT NULL,
    com_size VARCHAR(50) NOT NULL,
    job_role VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    country_code VARCHAR(10) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    country VARCHAR(100) NOT NULL,
    checkbox INT(1) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tbl_reg (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
);
Ensure the config.php file contains the correct database credentials for your setup (adjust if needed).

//Configuration

//Configure the Database Connection

// Database Connection
$servername = "localhost";   // Database server (usually localhost)
$username = "root";          // Database username (default is 'root' in XAMPP)
$password = "";              // Database password (leave empty for default 'root' in XAMPP)
$dbname = "web_test";        // Database name ('web_test' as per your setup)

//Admin Login and Dashboard

Username: admin
Password: admin@123

