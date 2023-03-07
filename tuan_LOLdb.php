<?php
$servername = "db";
$username = "matt_database";
$password = "password";
$dbname = "team1db";
// creating connection

$conn = new mysqli ($servername, $username, $password, $dbname);

// check the connection
if ($conn->connect_error){
    die("connection failed" . $conn->connect_error);
}
?>