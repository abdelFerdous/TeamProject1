<?php  $style1="signinstyle.css";$title="Sign in" ;$logo="pic/avatar.png";$style2 = "style1.css" ;
$game1="Sign in";
include("header.php") ?><br><br><br><br>
<div class="wrapper">
<div class="login-box">
    <img src="pic/avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="process.php" method="post">
            <p>Username</p>
            <input type="text" name="username" id="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>    
            </form>
</div>
</div>

  



