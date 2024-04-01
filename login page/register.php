<!-- register.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to database
    $conn = new mysqli('localhost', 'root', 'iamagudbo1', 'database_name');
    <!-- register.php -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
    
        // Connect to database
        $conn = new mysqli('localhost', 'username', 'password', 'social_media_platform');
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Insert user data into database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        // Close connection
        $conn->close();
    }
    ?>
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user data into database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
