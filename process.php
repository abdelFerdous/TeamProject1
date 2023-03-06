<?php

include("db.php");
            
            if (isset($_POST["submit"])) {
              $username =  $_POST['username'];
              $password =  $_POST['password'];
            
              $sql = "SELECT userid FROM userinfo WHERE username = '$username' and password = '$password'";
              $result = mysqli_query($connection, $sql);
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
              $count = mysqli_num_rows($result);
            
              if ($count == 1) {
              echo "succeeded";
              header("location: index.php");
              } else {
                $error = "Your Login Name or Password is invalid";
              }
            }
?>