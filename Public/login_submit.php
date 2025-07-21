<?php

session_start();
// This file handles the registration form submission
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_database = "test1";

$conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}


$email = $_POST['email'];
$password = $_POST['password'];


echo $email . "<br/>";
echo $password . "<br/>";

$sql = "select *from users where email = '$email' And password = '$password'";

$res = mysqli_query($conn, $sql);

if(!$res) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

$row = mysqli_fetch_assoc($res);

if($row){
    echo "Welcome !!" .$row['name'] ;

    $_SESSION['user_id'] = $row['id'];
    $_SESSION['name'] = $row['name'];

        // setcookie("user_id", $row['id'],time()+3600);
        // setcookie("name", $row['name'],time()+3600);
    ?>
    <a href = dashboard.php>Home</a>
    <?php
}else{
    echo "Login Failed<br/>";
    // ONly for masti
    ?>
    <a href = "Logging_form.php">Login Again</a><br/>
    <a href = dashboard.php>Home</a>
    <?php
}

mysqli_close($conn);


?>