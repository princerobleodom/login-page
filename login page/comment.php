<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['username'])) {
    // Collect form data
    $commentContent = $_POST['commentContent'];

    // Save comment to database (Implement this part as per your database structure)

    // Redirect to homepage or show success message
    header("Location: index.html");
    exit();
} else {
    // Redirect to login page if user is not logged in
    header("Location: index.html");
    exit();
}
?>
