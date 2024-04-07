<?php
// Check if ID parameter is provided in the URL
if (isset($_GET["id"])) {
    $registrationId = $_GET["id"];

    include_once "db.php";

    // Query to retrieve registration details by ID
    $sql = "SELECT * FROM registrations WHERE id = $registrationId";
    $result = $conn->query($sql);

    // Display edit form with pre-filled values
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Redirect to exam registration form with pre-filled values for editing
        header("Location: exam_registration.html?id=" . $registrationId);
        exit();
    } else {
        echo "Registration record not found.";
    }

    // Close database connection
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
