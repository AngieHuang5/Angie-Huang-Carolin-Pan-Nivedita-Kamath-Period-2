<?php
 include_once 'index.html'; //add template
    $host = "127.0.0.1";
    $user = "root";
    $pass = "1234";
    $db = "mydb";
    $port = 3307;
    $conn = mysqli_connect($host, $user, $pass, $db, $port); //create connection to db
        if($conn->connect_error) die($conn->connect_error); // quit if it fails
echo "it works";

        $conn->close();
    ?>
