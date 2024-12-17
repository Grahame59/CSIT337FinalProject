<?php
// Include the database connection
include('connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize it
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Prepare the SQL query to insert data
    $sql = "INSERT INTO contactForm (name, email, phoneNumber, message) VALUES ('$name', '$email', '$phoneNumber', '$message')";

    // Execute the query and check if successful
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
