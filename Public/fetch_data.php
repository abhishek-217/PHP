<?php 
// This file fetches data from the database
// Assuming a connection to the database is already established
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_database = "test1";

    $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

    if(!$conn){
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $sql = "SELECT * FROM users";
    $res = mysqli_query($conn, $sql);

    if(!$res){
        echo "Error frtching data: " . mysqli_error($conn);
        exit;
    }

    while($row = mysqli_fetch_assoc($res)){
        echo "Name: ". $row['name'] . "</br/>";
    }
    mysqli_close($conn);

    
?>