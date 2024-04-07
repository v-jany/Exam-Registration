<?php
// Check if ID parameter is provided in the URL
if (isset($_GET["id"])) {
    $registrationId = $_GET["id"];

    include_once "db.php";

    // Query to delete registration record by ID
    $sql = "DELETE FROM registrations WHERE id = $registrationId";

    if ($conn->query($sql) === TRUE) {
        echo "Registration record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
