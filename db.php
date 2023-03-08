<?php 
$servername = "db";
$uname = "matt_database";
$pword = "password";
$dbname = "team1db";
//creating connection
$connection=new mysqli($servername , $uname , $pword , $dbname);
//check connection
if($connection->connect_error){
    die("connection failed: ".$connection->connect_error);
}
?>