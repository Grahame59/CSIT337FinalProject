<?php
session_start();

// Database connection
$host = 'localhost'; 
$port = 3307; 
$dbname = 'rosarios_mechanics';
$username = 'root'; 
$password = '';

$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Fetch user data from the database
    $stmt = $conn->prepare("SELECT id, username, password, role FROM users WHERE username = ?");
    $stmt->bind_param('s', $inputUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Verify the password
        if (hash('sha256', $inputPassword) === $user['password']) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // Redirect to the home page
            header("Location: ../index.html"); // ../ for 1 Directory level up
            exit();
        } else {
            // Wrong password
            echo "<script>alert('Incorrect password. Please try again.'); window.history.back();</script>";
        }
    } else {
        // Wrong username
        echo "<script>alert('Username not found. Please try again.'); window.history.back();</script>";
    }

    $stmt->close();
}

$conn->close();
?>
