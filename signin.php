<?php  $style1="signinstyle.css";$title="Sign in" ;$logo="pic/avatar.png";$style2 = "style1.css" ;
$game1="Sign in";
include("header.php") ?><br><br><br><br>
<div class="wrapper">
<div class="login-box">
    <img src="pic/avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="process.php" method="get">
            <p>Username</p>
            <input type="text" name="username" id="username" placeholder="Enter Username" onblur="storeVal()">
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login"> 
            <a href="registration.php">you don't have an account, Register Now</a>    
            </form>

             <?php
            include("db.php");
            
            if (isset($_POST["submit"])) {
              $username =  $_GET['username'];
              $password =  $_GET['password'];
            
              $sql = "SELECT * FROM userinfo WHERE username = '$username' and password = '$password'";
              $result = mysqli_query($connection, $sql);
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
              $count = mysqli_num_rows($result);
            
              if ($count == 1) {
                
                echo '<script>window.location.href = "index.php";</script>';
                   
                     
                 
                 } else {
                   echo '<script>alert("User name or password incorrect"); window.location.href = "signin.php"; </script>'; 
                   //$error = "Your Login Name or Password is invalid";
                 }
            }
              
            ?> 
</div>
</div>

  



