<?php
$title = "Update Item";
$style2 = "style1.css";
$style1 = "tuan_deck.css";
$game1 = "League Of Legends build";
$logo = "pic/LOL Logo clear background.png";
include("header.php");
$a = $_GET['id'];
$query = "SELECT * FROM tuan_database WHERE id = $a";
include('tuan_LOLdb.php');
$result = mysqli_query($conn, $query);
if ($result === false) {
  echo "Error executing query: " . mysqli_error($conn);
} else {
  $row = mysqli_fetch_array($result);

}
?>
<div class="wrapper" style="margin-top:100px;">
  <div class="title">
    Update this item
  </div>

  <form name="itemadd" method="post" action="" onsubmit="return tuanitem()">
  <label for="disabledTextInput" class="form-label">Item</label>
    <input type="text" class="form-control" name="item" placeholder="Item" value="<?php echo $row['item']; ?>"
      required><br>
      <label for="disabledTextInput" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $row['price']; ?>"
      required>
      <div id="emailHelp" class="form-text">You can only type amount in number without any characters</div><br>
      <label for="disabledTextInput" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
      rows="8"><?php echo $row['description']; ?></textarea><br><br>
    <select name="role" class="form-control">
      <option value="Controller" <?php if ($row['role'] == 'Controller') {
        //The echo 'selected' statement is used to add the selected attribute to the HTML option tag when the value of $row['role'] matches with the option value 
        echo 'selected';
      } ?>>Controller</option>
      <option value="Fighter" <?php if ($row['role'] == 'Fighter') // If the value of $row['role'] is equal to 'Controller', the selected attribute is added 
      //to the option tag to indicate that this option should be pre-selected when the form is loaded.
      {
        echo 'selected';
      } ?>>Fighter</option>
      <option value="Marksman" <?php if ($row['role'] == 'Marksman') // If the value of $row['role'] is equal to 'Marksman', the selected attribute is added 
      //to the option tag to indicate that this option should be pre-selected when the form is loaded. 
      {
        echo 'selected';
      } ?>>Marksman</option>
      <option value="Slayer" <?php if ($row['role'] == 'Slayer') {
        echo 'selected';
      } ?>>Slayer</option>
      <option value="Tank" <?php if ($row['role'] == 'Tank') {
        echo 'selected';
      } ?>>Tank</option>
      <option value="Support" <?php if ($row['role'] == 'Support') {
        echo 'selected';
      } ?>>Support</option>
      <option value="Specialist" <?php if ($row['role'] == 'Specialist') {
        echo 'selected';
      } ?>>Specialist</option>
      <option value="Mage" <?php if ($row['role'] == 'Mage') {
        echo 'selected';
      } ?>>Mage</option>
      <option value="Assassin" <?php if ($row['role'] == 'Assassin') {
        echo 'selected';
      } ?>>Assassin</option>
      <option value="All" <?php if ($row['role'] == 'All') {
        echo 'selected';
      } ?>>All</option>
    </select>
    <!--The confirm() function displays a confirmation dialog box with the message "Are you sure you want to delete this item?" and two buttons, OK and Cancel. -->
    <div class="form-group">
      </select>
      <input type="submit" type="button" class="btn btn-primary" value="Update the item " name="update"
        style="margin-top: 20px;" onclick="return confirm('Are you sure you want to update this item?');"><br><br>

      <div class="form-group">
        <input type="submit" type="button" class="btn btn-danger" value="Delete the item " name="delete"
          onclick="return confirm('Are you sure you want to delete this item?');">
      </div>
    </div>


    <br><br>

  </form>
</div>

<?php
include 'tuan_LOLdb.php';
if (isset($_POST['update'])) {
  //mysqli_real_escape_string() is a function in PHP that is used to escape special characters in a string so that it can be used safely in an SQL query.
  //By using mysqli_real_escape_string(), the special characters are replaced with their corresponding escape sequences, making them safe for use in SQL queries
  $item = mysqli_real_escape_string($conn, $_POST['item']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $role = mysqli_real_escape_string($conn, $_POST['role']);

  $query = "UPDATE tuan_database SET item='$item', price='$price', description='$description', role='$role' WHERE id = '$a'";
  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    //window.location.href is a JavaScript command that sets the URL of the current window to the specified value, effectively redirecting the user to a new page.
    echo '<script>alert("Data Updated Successfully"); window.location.href = "tuan_searchLOL.php";</script>';
  } else {
    echo '<script>alert("Error Occurred While Updating Data");</script>';
  }
}
?>

<?php
include 'tuan_LOLdb.php';
if (isset($_POST['delete'])) {
  //By using mysqli_real_escape_string(), the special characters are replaced with their corresponding escape sequences, making them safe for use in SQL queries
  $item = mysqli_real_escape_string($conn, $_POST['item']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $role = mysqli_real_escape_string($conn, $_POST['role']);
  $query = "DELETE FROM tuan_database WHERE item = '$item'";
  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    //window.location.href is a JavaScript command that sets the URL of the current window to the specified value, effectively redirecting the user to a new page.
    echo '<script>alert("Data Updated Successfully"); window.location.href = "tuan_searchLOL.php";</script>';

  } else {
    echo '<script>alert("Error Occurred While Deleting Data");</script>';
  }
}
?>
<?php
include 'footer.php';
?>