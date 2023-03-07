<?php
$servername = "db";
$username = "matt_database";
$password = "password";
$dbname = "team1db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}

?>