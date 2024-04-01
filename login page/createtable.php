<?php
// Database connection details
$db_host = 'localhost'; // Replace with your MySQL host
$db_username = 'root'; // Replace with your MySQL username
$db_password = 'iamagudbo1'; // Replace with your MySQL password
$db_name = 'social_media_platform'; // Replace with your MySQL database name

// Connect to MySQL database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create 'users' table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
