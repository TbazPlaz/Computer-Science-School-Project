<?php
include 'config.php'; // Connect to database

// Check if "q" exists
if (!isset($_GET['q']) || empty($_GET['q'])) {
    echo "Please enter a search term.";
    exit;
}

$search = $_GET['q'];

// Basic SQL search (beginner level)
$sql = "SELECT * FROM listings WHERE title LIKE '%$search%'";
$result = $conn->query($sql);

// Show results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row['title'] . "</strong><br>" . $row['description'] . "</p><hr>";
    }
} else {
    echo "No results found.";
}
?>
