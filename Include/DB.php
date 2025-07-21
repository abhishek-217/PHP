<?php

// Database connection details
require_once 'src.php';

// First step to connect to the database
// mysqli_connect() function is used to connect to the database

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

// Check any connection error
// If connection fails, it will display an error message and exit the script
if (!$conn) {
    echo "Connection faailed: " . mysqli_connect_error();
    exit;

}
?>