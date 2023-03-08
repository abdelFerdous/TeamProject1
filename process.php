<?php
session_start();
// $db = mysqli_connect("db", "registrationdb", "password", "registrationdb");

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $username = mysqli_real_escape_string($db, $_POST['username']);
//   $password = mysqli_real_escape_string($db, $_POST['password']);

//   $sql = "SELECT userid FROM userinfo2 WHERE nameuser = '$username' and password = '$password'";
//   $result = mysqli_query($db, $sql);
//   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//   $count = mysqli_num_rows($result);

//   if ($count == 1) {
//     $_SESSION['login_user'] = $username;
//     header("location: index.php");
//   } else {
//     $error = "Your Login Name or Password is invalid";
//   }
// }


include("db.php");
            
           
           
            if (isset($_GET["submit"])) {
              $username =  $_GET['username'];
              $password =  $_GET['password'];
            
              $sql = "SELECT userid FROM userinfo WHERE username = '$username' and password = '$password'";
              $result = mysqli_query($connection, $sql);
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
              $a=$row["userid"];
              
              $count = mysqli_num_rows($result);
            
              if ($count == 1) {
                $_SESSION["session_uname"] = $username;
                $_SESSION["session_uid"] = $a;
             echo '<script>window.location.href = "index.php";</script>';
                  
              
              } else {
                echo '<script>alert("User name or password incorrect"); window.location.href = "signin.php"; </script>'; 
                //$error = "Your Login Name or Password is invalid";
              }
              
            }
            
              
            
?>