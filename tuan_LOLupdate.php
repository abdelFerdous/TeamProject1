<?php
$title = "Update Item";
$style2 = "style1.css";
$style1 = "tuan_deck.css";
$game1 = "League Of Legends build";
$logo = "pic/LOL Logo clear background.png";
include("header.php");
$a = $_GET['item'];
$query = "SELECT * FROM lolmeta where item = '$a";
include('tuan_LOLdb.php');
$result = mysqli_query($conn, "SELECT * FROM lolmeta");
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
  <p>Attention: The description box is empty when you click the item. If you don't want to change anything, return. If you want to update, you need to type everything again in description </p>
  <form name="deckform" method="post" action="">
    <input type="text" class="form-control" name="item" placeholder="Item" value="<?php echo $row['item']; ?>" required><br><br>
    <input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $row['price']; ?>" required><br><br>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5" required></textarea><br><br>
    <select name="role" class="form-control" value="<?php echo $row['role']; ?>">
    <option value="Mid">Controller</option>
      <option value="Fighter">Fighter</option>
      <option value="Marksman">Marksman</option>
      <option value="Slayer">Slayer</option>
      <option value="Tank">Tank</option>
      <option value="Specialist">Specialist</option>
      <option value="Specialist">Mage</option>
      <option value="Specialist">All</option>
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
$item = mysqli_real_escape_string($conn, $_POST['item']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$role = mysqli_real_escape_string($conn, $_POST['role']);
  $query = "UPDATE lolmeta SET item='$item', price='$price', description='$description', role='$role' WHERE item='$item'";
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
  $item = mysqli_real_escape_string($conn, $_POST['item']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$role = mysqli_real_escape_string($conn, $_POST['role']);
  $query = "DELETE FROM lolmeta WHERE item = '$item'";
  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    echo '<script>alert("Data Deleted Successfully");</script>';
    header("Location: tuan_LOLsearch.php");
  } else {
    echo '<script>alert("Error Occurred While Deleting Data");</script>';
  }
}
?>
<?php
include 'footer.php';
?>