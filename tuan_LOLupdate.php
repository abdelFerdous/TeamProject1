<?php
$title = "Update Item";
$style2 = "style1.css";
$style1 = "tuan_deck.css";
$game1 = "League Of Legends build";
$logo = "pic/LOL Logo clear background.png";
include("header.php");
$a = $_GET['item'];
$query = "SELECT * FROM lolmeta";
include('tuan_LOLdb.php');
$result = mysqli_query($conn, "SELECT * FROM metalol");
if ($result === false) {
  echo "Error executing query: " . mysqli_error($conn);
} else {
  $row = mysqli_fetch_array($result);
  // Rest of your code
}
?>
<div class="wrapper" style="margin-top:100px;">
  <div class="title">
    Update this item
  </div>
  <p>Attention: When you click the item, it will change the data of the item (it won't add new item)</P>
  <form name="deckform" method="post" action="">
    <input type="text" class="form-control" name="item" placeholder="Item" ><br><br>
    <input type="text" class="form-control" name="price" placeholder="Price"><br><br>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea><br><br>
    <select name="role" class="form-control" >
      <option value="Mid">-- Role --</option>
      <option value="Mid">Controller</option>
      <option value="Fighter">Fighter</option>
      <option value="Marksman">Marksman</option>
      <option value="Slayer">Slayer</option>
      <option value="Tank">Tank</option>
      <option value="Specialist">Specialist</option>
      <div class="form-group">
</select> 
<input type="submit" type="button" class="btn btn-primary" value="Update the item " name="update" style="margin-top: 20px;"><br><br>

<div class="form-group">
  <input type="submit" type="button" class="btn btn-primary" value="Delete the item " name="delete"><br><br>
</div> 
</div>


<br><br>

</form>
<?php
include 'tuan_LOLdb.php';
if (isset($_POST['update'])) {
  $item = $_POST['item'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $role = $_POST['role'];
  $query = "UPDATE lolmeta SET item='$item', price='$price', description='$description', role='$role'";
  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    echo '<script>alert("Data Updated Successfully");</script>';
    header("Location: tuan_LOLsearch.php");
  } else {
    echo '<script>alert("Error Occurred While Updating Data");</script>';
  }
}
?>

<?php
include 'tuan_LOLdb.php';
if (isset($_POST['delete'])) {
  $item = $_POST['item'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $role = $_POST['role'];
  $query = "DELETE FROM lolmeta";
  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    echo '<script>alert("Data Updated Successfully");</script>';
    header("Location: tuan_LOLsearch.php");
  } else {
    echo '<script>alert("Error Occurred While Updating Data");</script>';
  }
}
?>
<?php
include 'footer.php';
?>