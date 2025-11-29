<?php
session_start();
include 'config.php';

header('Content-Type: application/json');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Please log in first']);
    exit;
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

// Get form data
$name = $_POST['name'];
$newPassword = $_POST['new_password'];
$confirm = $_POST['confirm_password'];

// Check name
if (empty($name)) {
    echo json_encode(['success' => false, 'message' => 'Name is required']);
    exit;
}

// Always update name
$set = "name='$name'";

// Optional: Update password if entered
if (!empty($newPassword)) {
    if ($newPassword !== $confirm) {
        echo json_encode(['success' => false, 'message' => 'Passwords do not match']);
        exit;
    }
    $hash = password_hash($newPassword, PASSWORD_DEFAULT);
    $set .= ", password='$hash'";
}

// Update user in database
$id = $_SESSION['user_id'];
$sql = "UPDATE users SET $set WHERE id=$id LIMIT 1";

if ($conn->query($sql)) {
    $_SESSION['user_name'] = $name; // Update session
    echo json_encode(['success' => true, 'message' => 'Account updated successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Update failed']);
}
?>
