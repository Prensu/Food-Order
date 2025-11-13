<?php 
// Start Session
session_start();

// Create Constants
define('SITEURL', 'http://localhost/food-order/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');

// 🔹 Try connecting first on default port (3306)
$conn = @mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME, 3306);

// 🔹 If connection fails, try port 3307 automatically
if (!$conn) {
    $conn = @mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME, 3307);
}

// 🔹 If still fails, stop and show the exact error
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}
?>
