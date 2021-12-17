<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "csp_can";

//echo "Hello!<br/>"

//echo $servername . "<br/>"

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
