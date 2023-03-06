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