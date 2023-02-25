<?php
$title = "Deck Database";
$style2 = "style1.css";

$game1 = "League Of Legends meta";
$logo = "pic/LOL Logo clear background.png";
include("header.php") ?>




<div class="wrapper" style= "margin-top:100px;">
  <div class="title">
    Enter the meta
  </div>
  <form name="deckform" method="post" action="" onsubmit="return deckval()">
    <div class="form-group">
      <form method="post" action="" style="margin-top: 100px">
    </div>
    <div class="form-group">
      <select name="role">
        <option value="Top">Top</option>
        <option value="Mid">Mid</option>
        <option value="ADC">ADC</option>
        <option value="Support">Support</option>
        <option value="Jungle">Jungle</option>
      </select>
    </div><br><br>
    <div class="form-group">
      <input type="text" name="item" placeholder="Item" required>
    </div><br><br>
    <input type="text" name="price" placeholder="Price" required>
<br><br>
<div class="form-group">
  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
</div>
<br><br>
<div class="form-group">
  <input type="submit" value="Submit" name="Submit">
</div>
</form>
</div>
</div>
<?php
if (isset($_POST["submit"])) {
  $role = $_POST['role'];
  $item = $_POST['item'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  include 'tuan_LOLdb.php';
  $sql = "insert into capp1(role,item,price,description)
    values ('$role','$item', '$price','$description')";
  if ($conn->query($sql) === true) {
    echo "Your information is added successfully";
  } else {
    echo "Error: " . $conn->error;
  }
}
?>