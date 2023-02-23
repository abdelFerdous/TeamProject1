<?php 
$servername ="db";
$username="registrationdb";
$password ="password";
$dbname="registrationdb";
//creating connection
$connection=new mysqli($servername , $username , $password , $dbname);
//check connection
if($connection->connect_error){
    die("connection failed: ".$connection->connect_error);
}
?>