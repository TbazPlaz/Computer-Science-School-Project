<?php
session_start();
include 'config.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get form data
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm-password'];

    // Check if empty
    if (empty($name) || empty($email) || empty($password)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Check password match
    if ($password !== $confirm) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash password (good practice!)
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hash')";
    
    if ($conn->query($sql)) {
        header("Location: ../login.html"); // Go to login page
        exit;
    } else {
        echo "Error saving user.";
    }
}
?>
