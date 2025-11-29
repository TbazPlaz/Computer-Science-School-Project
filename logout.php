<?php
session_start(); // Start the session

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

// Response for JavaScript
header('Content-Type: application/json');
echo json_encode(['success' => true, 'message' => 'Logged out']);
?>
