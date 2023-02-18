<?php $title="loging page" ;
$style1 = "style1.css";
$logo = "pic/black.jpg";
$game1 = "Registration";
 include("header.php")?>

<form action="" method="post">
<input type="text" name="fname" placeholder="First Name*" required><br><br>
<input type="text" name="lname" placeholder="Last Name*"  required><br><br>
<input type="text" name="email" placeholder="email adress*"  required><br><br>
<input type="password" name="password" placeholder="password*"  required><br><br>
<input type="password" name="confirm_password" placeholder="confirm password*"  required><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php 
if(isset($_POST["submit"]) && $_POST["password"]==$_POST["confirm_password"]){
   $fname=$_POST["fname"];
   $lname=$_POST["lname"];
   $email=$_POST["email"];
   $password =$_POST["password"]; 
   include("db.php");
   $sql = "insert into accountinfo (fname , lname, email, password)
           values('$fname','$lname' , '$email' , '$password')";
    if($connection->query($sql)===true){
        echo "database updated successfully";
    }else{
        echo "Error :".$connection->error;
    }
}


   ?>
<?php include("footer.php") ?>