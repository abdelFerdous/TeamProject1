<?php
$title = "Add item";
$style2 = "style1.css";
$style1 = "tuan_deck.css";
$game1 = "League Of Legends meta";
$logo = "pic/LOL Logo clear background.png";

include("header.php") ?>




<div class="wrapper" style= "margin-top:100px;">
  <div class="title">
    Add League of Legends item
  </div>
  <form name="deckform" method="post" action="">
  
  <input type="text" class="form-control" name="item" placeholder="Item" required><br><br>
  <input type="text" class="form-control" name="price" placeholder="Price" required><br><br>
  <textarea class="form-control" placeholder="Description" name="description" id="exampleFormControlTextarea1" rows="5"></textarea><br><br>
  <select name="role" class="form-control"><br><br>
  <option value="Mid">-- Role --</option>
      <option value="Mid">Controller</option>
      <option value="Fighter">Fighter</option>
      <option value="Marksman">Marksman</option>
      <option value="Slayer">Slayer</option>
      <option value="Tank">Tank</option>
      <option value="Specialist">Specialist</option>
  </select>
  <br><br>
  <input type="submit" type="button" class="btn btn-primary" value="Submit" name="submit">

</form>
</div>
<?php
  if (isset($_POST["submit"])){
    $item = $_POST['item'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $role = $_POST['role'];
    include 'tuan_LOLdb.php';
    $sql = "insert into lolmeta(item, price, description, role)
    values ('$item', '$price', '$description', '$role')";
    if ($conn ->query($sql) === true) {
      echo "Your information is added successfully";
    }
    else {
      echo "Error: ". $conn-> error;
    }
  }
?>