<?php 
$title = "Deck Database";
$style2 = "style1.css";
$game1 = "League Of Legends meta";
$logo = "pic/LOL Logo clear background.png";
include("header.php") ?>




<form method="post" action = "" style="margin-top: 100px">
  <select name="role">
    <option value="Top">Top</option>
    <option value="Mid">Mid</option>
    <option value="ADC">ADC</option>
    <option value="Support">Support</option>
    <option value="Jungle">Jungle</option>
  </select><br><br>
  <input type="text" name="champion" placeholder="Champion" required><br><br>
  <textarea name="item" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>

  <br><br>
  <input type="submit" value="Submit" name="submit">
</form>
<?php
  if (isset($_POST["submit"])){
    $role = $_POST['role'];
    $champion = $_POST['champion'];
    $item = $_POST['item'];
    include 'tuan_LOLdb.php';
    $sql = "insert into capp1(role,champion,item)
    values ('$role','$champion', '$item')";
    if ($conn ->query($sql) === true) {
      echo "Your information is added successfully";
    }
    else {
      echo "Error: ". $conn-> error;
    }
  }
?>
<?php 
include 'footer.php';
?>

