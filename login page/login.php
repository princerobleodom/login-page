<!-- login.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to database
    $conn = new mysqli('localhost', 'root', 'iamagudbo1', 'social_media_platform');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful";
            // Start session or set cookies for user authentication
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "User not found";
    }

    // Close connection
    $conn->close();
}
?>
