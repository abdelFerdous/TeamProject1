<?php $title = "Regestration page";
$style1 = "style1.css";
$style2 = "regstyle.css";
$game1 = "Registration";
$logo = "pic/avatar.png";
include("header.php"); ?><br><br><br>
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <form action="" method="post">
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="fname">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="lname">
       </div>  
       <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input" name="username">
       </div>  
      <div class="inputfield">
          <label>E-mail</label>
          <input type="text" class="input" name="email" id="email" onblur="ValidateEmail()">
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
          <input type="text" class="input" name="phone" id="phone" onblur="ValidatePhone()">
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
  include("db.php");
  $sql = "insert into userinfo (fname , lname,username, email, phone ,password)
          values('$fname','$lname','$username' , '$email','$phone' , '$password')";
   if($connection->query($sql)===true){
       echo "database updated successfully";
   }else{
       echo "Error :".$connection->error;
   }
}
?>	
</body>


<?php include("footer.php")?>