<?php
/*()
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "csp_can";
*/
/*
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b1f0f895c5e0b5";
$password = "67175e91";
$dbname = "heroku_00fb331cfea2239";
*/

$servername = "us-cdbr-east-05.cleardb.net";
$username = "b4dd2ee702817e";
$password = "4c7b4665";
$dbname = "heroku_9885c31f8807907";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn2 = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
} 
?>
