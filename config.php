<?php
$servername = "localhost:3307";
$username = "root"; // Default MySQL username
$password = ""; // Default is empty in XAMPP
$database = "uptoskill";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
