<?php
$servername = "localhost"; // or 127.0.0.1
$username = "root";
$password = ""; // if no password set for root
$dbname = "rosarios_mechanics"; // make sure this matches the database name
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>