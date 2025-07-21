<?php

    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "test1";


    // First step to connect to the database
    // mysqli_connect() function is used to connect to the database

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    // Check any connection error
    // If connection fails, it will display an error message and exit the script
    if(!$conn){
        echo "Connection faailed: " . mysqli_connect_error();
        exit;

    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to insert data into the database

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    // Only to see on the wb page

    echo $name . "<br/>";
    echo $email . "<br/>";
    echo $password . "<br/>";

    // Make query function to insert data into the database
    

    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    // If the query fails, it will display an error message and exit the script
    if(!$result){
        echo "Connection failed Some error occurred: " . mysqli_error($conn);
        exit;
    }

    echo "Registration successful! <br/>";
    echo "Welcome, $name! <br/>";

    mysqli_use_result($conn);
?>