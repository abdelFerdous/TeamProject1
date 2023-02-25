<?php 
$title = "Deck Database";
$style2 = "style1.css";
$game1 = "League Of Legends meta";
$logo = "pic/LOL Logo clear background.png";
include("header.php");
$a = $_GET['id'];
include('tuan_LOLdb.php');
$result = mysqli_query($conn,"Select * from capp1 ");
$row = mysqli_fetch_array($result)

?>
<h2> Update your information below</h2>
<form method="post" action = "" style="margin-top: 100px">
<div class = "form-group">
  <select name="role">
    <option value="Top">Top</option>
    <option value="Mid">Mid</option>
    <option value="ADC">ADC</option>
    <option value="Support">Support</option>
    <option value="Jungle">Jungle</option>
  </select></div><br><br>
  <div class = "form-group">
  <input type="text" name="champion" placeholder="Champion" required><br><br></div>
  <div class = "form-group">
  <textarea name="item" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea></div>
  <br><br><div class = "form-group">
  <input type="submit" value= "Update your info " name = "update"><br><br></div>
  <div class = "form-group">
  <input type="submit" value= "Delete your info " name = "delete"><br><br></div>

  <br><br>

</form>
<?php 
if (isset($_POST['update'])){
  $role = $_POST['role'];
  $champion = $_POST['champion'];
  $item = $_POST['item'];
  $query = mysqli_query($conn,"UPDATE capp1 set role='$role',champion='$champion',item='$item'");

if($query){
  echo"<h2> Your infomation is updated successfully</h2>";
}
else{
  echo"<h2> Record not modified</h2>";
}
}
?>
<?php 
if (isset($_POST['delete'])){
  $role = $_POST['role'];
  $champion = $_POST['champion'];
  $item = $_POST['item'];
  $query = mysqli_query($conn,"DELETE FROM capp1");

if($query){
  echo"<h2> Your infomation is deleted successfully</h2>";
}
else{
  echo"<h2> Record not modified</h2>";
}
}
?>
<?php 
include 'footer.php';
?>



