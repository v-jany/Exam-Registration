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
│   ├── style.css                # Custom CSS styles for the project
│   └── bootstrap.min.css        # Bootstrap CSS framework (downloaded or linked)
│
├── js/
│   ├── script.js                # JavaScript for interactive features (e.g., countdown)
│   └── bootstrap.min.js         # Bootstrap JavaScript framework (downloaded or linked)
│
├── uploads/                     # Directory to store uploaded candidate photos
│
├── includes/
│   ├── db.php                   # Database connection script
│   ├── view_registration.php   # PHP script to view registration records
│   ├── edit_registration.php   # PHP script to edit registration records
│   └── delete_registration.php # PHP script to delete registration records
│
├── exam_registration.html      # HTML form for exam registration
├── view_registrations.html      # HTML page to view registration records
│
├── submit_registration.php      # PHP script to handle form submission for registration
│
├── index.html                   # Login page (if needed for future implementation)
│
└── README.md                    # Project documentation and instructions
