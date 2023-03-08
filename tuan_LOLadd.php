<?php
$title = "Add item";
$style2 = "style1.css";
$style1 = "tuan_deck.css";
$game1 = "League Of Legends meta";
$logo = "pic/LOL Logo clear background.png";

include("header.php") ?>

<!-- Display the HTML form -->
<div class="wrapper" style="margin-top:100px; ">
  <div class="title">
    Add League of Legends item
  </div>
  <form name="itemadd" method="post" action="" onsubmit="return tuanitem()">
    <input type="text" class="form-control" name="item" placeholder="Item" required><br><br>
    <input type="text" class="form-control" name="price" placeholder="Price" required><br><br>
    <textarea class="form-control" placeholder="Description" name="description" id="exampleFormControlTextarea1"
      rows="5"></textarea><br><br>
    <select name="role" class="form-control"><br><br>
      <option value="Mid">-- Role --</option>
      <option value="Controller">Controller</option>
      <option value="Fighter">Fighter</option>
      <option value="Marksman">Marksman</option>
      <option value="Slayer">Slayer</option>
      <option value="Tank">Tank</option>
      <option value="Support">Support</option>
      <option value="Specialist">Specialist</option>
      <option value="Mage">Mage</option>
      <option value="Assassin">Assassin</option>
      <option value="All">All</option>
    </select>
    <br><br>
    <input type="submit" type="button" class="btn btn-primary" value="Submit" name="submit">

    <!-- PHP area -->
    <?php

    // Include the database connection file
    include 'tuan_LOLdb.php';

    // Check if the form was submitted
    if (isset($_POST["submit"])) {
       //The mysqli_real_escape_string() function is used to escape special characters in the data submitted by the user to prevent SQL injection.
       $item = mysqli_real_escape_string($conn,$_POST['item']);
       $price = mysqli_real_escape_string($conn, $_POST['price']);
       $description = mysqli_real_escape_string($conn, $_POST['description']);
       $role = $_POST['role'];


     

      // Define the SQL query to insert the data into the database
      $sql = "insert into tuan_database(item, price, description, role)
values ('$item', '$price', '$description', '$role')";

      // Execute the SQL query and check if it was successful
      if ($conn->query($sql) === true) {
        echo "Your information is added successfully";
      } else {
        echo "Error: " . $conn->error;
      }
    }
    ?>
  </form>
</div>
<?php include('footer.php') ?>