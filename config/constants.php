<?php
        // Start Session
        session_start();

        // Create Constant to store Non Repeating values
        define('SITEURL', 'http://localhost/final-year-project/');
        define('LOCALHOST', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'dasproject');

        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //database connection
        $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
?>