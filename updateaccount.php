<?php $title = "Update page";
$style1 = "style1.css";
$style2 = "regstyle.css";
$game1 = "Update account";
$logo = "pic/avatar.png";
include("header.php"); 
$a=$_GET['userid'];
include("db.php");
$result=mysqli_query($connection , "select * from userinfo where id = '$a'");
$row=mysqli_fetch_array($result);
?><br><br><br>
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <form action="" method="post">
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="fname" value="<?php echo $row[''] ?>">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="lname" value="<?php echo $row[''] ?>">
       </div>  
       <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input" name="username" value="<?php echo $row[''] ?>">
       </div>  
      <div class="inputfield">
          <label>E-mail</label>
          <input type="text" class="input" name="email" id="email" onblur="ValidateEmail()" value="<?php echo $row[''] ?>">
       </div> 
        <!-- <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div>  -->
        <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="phone" id="phone" onblur="ValidatePhone()" value="<?php echo $row[''] ?>">
       </div> 
      <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password" id="pswd1">
       </div> 
      <!-- <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea"></textarea>
       </div>  -->
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input" name ="cpassword" id="pswd2" onblur="matchPassword()">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" name="submit" value="Register" class="btn">
      </div>
</div>
</form>
    
</div>
<?php 
echo "processing" ;

if(isset($_POST["submit"])){
  echo"now creating variables";
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $username=$_POST["username"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $password =$_POST["password"]; 
  
  $sql = "UPDATE userinfo SET fname ='$fname', lname='$lname', username='$username' , email='$email',phone='$phone' , password='$password'where userid='$a'";
   if($connection->query($sql)===true){
       echo "User account updated successfully";
   }else{
       echo "Error :".$connection->error;
   }
}
?>	
</body>


<?php include("footer.php")?>