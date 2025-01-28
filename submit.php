<?php
include 'config.php'; // Connect to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $internship_type = $_POST["internship_type"];
    $mobile = $_POST["mobile"];
    $duration = $_POST["duration"];
    $qualification = $_POST["qualification"];
    $branch = $_POST["branch"];
    $experience = $_POST["experience"];
    $college = $_POST["college"];
    $location = $_POST["location"];
    $city = $_POST["city"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $message = $_POST["message"];

    // Insert data into MySQL
    $sql = "INSERT INTO internship_applications 
            (name, email, internship_type, mobile, duration, qualification, branch, experience, college, location, city, start_date, end_date, message)
            VALUES ('$name', '$email', '$internship_type', '$mobile', '$duration', '$qualification', '$branch', '$experience', '$college', '$location', '$city', '$start_date', '$end_date', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully! <a href='index.html'>Go Back</a>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
