<?php
session_start();  // Start session (for checking login)

header('Content-Type: application/json'); // Tell JS that we're sending JSON

// If user is logged in, return their data
if (isset($_SESSION['user_id'])) {
    echo json_encode([
        'success' => true,
        'user' => [
            'id' => $_SESSION['user_id'],
            'name' => $_SESSION['user_name'] ?? '',
            'email' => $_SESSION['user_email'] ?? ''
        ]
    ]);
} else {
    // Not logged in
    echo json_encode([
        'success' => false,
        'message' => 'Not signed in'
    ]);
}
