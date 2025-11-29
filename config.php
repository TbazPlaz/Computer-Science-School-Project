<?php
// CONFIG: Define connection details in a simple W3Schools-like style
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "stayspot";

// CONNECT: Use object-oriented mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// FLAG: Mark an error (do not die here so pages can echo a friendly message)
if ($conn->connect_error) {
    $db_error = "Connection failed";
}
?>
