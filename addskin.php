<?php
$title = "Add item";
$style2 = "style1.css";
$style1 = "georgii_fav.css";
$game1 = "Add Skins";
$logo = "pic/LOL Logo clear background.png";

include("header.php") ?>

<div class="wrapper" style="margin-top:100px; ">
  <div class="title">
    Add League of Legends skin
  </div>
  <form name="skinadd_form" method="post" action="">

    <input type="text" class="form-control" name="champ" placeholder="Champion" required><br><br>
    <input type="text" class="form-control" name="name" placeholder="Name" required><br><br>
    <input type="number" class="form-control" name="price" placeholder="Price (0 if cannot buy)"><br><br>
    <input type="text" class="form-control" name="showcase" placeholder="YT Showcase"><br><br>
    
    <input type="submit" type="button" class="btn btn-primary" value="Submit" name="submit">

    <!-- PHP area -->
    <?php
    if (isset($_POST['submit'])){
    $champ=$_POST['champ'];
    $name=$_POST['name'];
    $price=intval($_POST['price']);
    $showcase=$_POST['showcase'];

    include "skindb.php";
    $sql = "insert into georgii_skins (champ, name, cost, showcase)
    values('$champ','$name','$price','$showcase')";
    echo $champ . $name . $price . $showcase;

    if ($conn ->query($sql) === TRUE){
      echo "<h2>Your information was added successfully</h2>";
    }
    else {
      echo "<p>ERROR: </p>" . $conn->error;;
    }
  }
  ?>
  </form>
</div>
<?php include('footer.php') ?>