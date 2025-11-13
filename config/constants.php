<?php 
    // Start Session
    session_start();

    // Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/food-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');
    define('DB_PORT', 3307); // port number for XAMPP MySQL

    //default was 3306 and it created error so changed the port 

    // Database Connection
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT) 
        or die(mysqli_error($conn));

?>
