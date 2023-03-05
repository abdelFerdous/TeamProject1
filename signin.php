<?php  $style1="signinstyle.css";$title="Sign in" ;$logo="pic/avatar.png";$style2 = "style1.css" ;
$game1="Sign in";
include("header.php") ?><br><br><br><br>
<div class="wrapper">
<div class="login-box">
    <img src="pic/avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>    
            </form>

            
            
        
        
</div>
</div>
<?php
           
            //$db = mysqli_connect("localhost", "username", "password", "database_name");
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
  



