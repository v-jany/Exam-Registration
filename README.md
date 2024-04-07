Ensure your server environment supports PHP and that you have a MySQL database set up with table 'registrations'. You'll need to create these table with appropriate columns (id, photo, name, reg_no, dob, programme, department, semester, subjects).

Php:
Replace localhost, your_username, your_password, and your_database with your actual database connection details.

mysql -u username -p
SHOW DATABASES;
USE database_name;
SELECT user, host, authentication_string FROM mysql.user;
EXIT;


exam-registration-system/
│
├── css/
│   ├── style.css
│   └── bootstrap.min.css
│
├── js/
│   ├── script.js
│   └── bootstrap.min.js
│
├── uploads/
│
├── includes/
│   ├── db.php
│   ├── view_registration.php
│   ├── edit_registration.php
│   └── delete_registration.php
│
├── exam_registration.html
├── view_registrations.html
│
├── submit_registration.php
│
├── index.html
│
└── README.md
