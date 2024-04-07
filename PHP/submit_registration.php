<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $candidateName = htmlspecialchars($_POST["candidateName"]);
    $regNo = htmlspecialchars($_POST["regNo"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $programme = htmlspecialchars($_POST["programme"]);
    $department = htmlspecialchars($_POST["department"]);
    $semester = htmlspecialchars($_POST["semester"]);
    $subjects = isset($_POST["subjects"]) ? $_POST["subjects"] : [];

    // Validate file upload (candidate photo)
    if ($_FILES["candidatePhoto"]["error"] == UPLOAD_ERR_OK) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["candidatePhoto"]["name"]);

        // Move uploaded file to destination directory
        if (move_uploaded_file($_FILES["candidatePhoto"]["tmp_name"], $targetFile)) {
            // Database connection parameters (replace with your actual database credentials)
            $servername = "localhost";
            $username = "your_username";
            $password = "your_password";
            $dbname = "your_database";

            // Create database connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check database connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and bind SQL statement to insert registration data into database
            $stmt = $conn->prepare("INSERT INTO registrations (candidateName, regNo, dob, programme, department, semester, subjects, candidatePhoto) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssss", $candidateName, $regNo, $dob, $programme, $department, $semester, implode(", ", $subjects), $targetFile);

            // Execute SQL statement to insert data
            if ($stmt->execute()) {
                echo "Registration successful!";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement and database connection
            $stmt->close();
            $conn->close();
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "File upload error.";
    }
} else {
    // Redirect to registration page if accessed directly
    header("Location: exam_registration.html");
    exit();
}
?>
