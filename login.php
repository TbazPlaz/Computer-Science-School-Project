<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Stop if fields are empty
    if (empty($email) || empty($password)) {
        echo "Please enter your email and password.";
        exit;
    }

    // Query user
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Simple login checking
        if (password_verify($password, $row['password']) || $password === $row['password']) {
            $_SESSION['user_name'] = $row['name'];
            header("Location: ../Index.html");
            exit;
        }
    }

    echo "Invalid email or password.";
}
?>
