<?php
$servername = "db";
$username = "matt_database";
$password = "password";
$dbname = "matt_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}

?>