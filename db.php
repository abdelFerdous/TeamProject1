<?php 
$servername ="db";
$username="root";
$password ="password";
$dbname="team1db";
//creating connection
$connection=new mysqli($servername , $username , $password , $dbname);
//check connection
if($connection->connect_error){
    die("connection failed: ".$connection->connect_error);
}
?>