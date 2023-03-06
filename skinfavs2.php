<?php $title = "Skin Search";

$style2 = "style1.css";
$style1 = "georgii_fav.css";
$game1 = "Skin search";
$logo = "pic/black.jpg";
include 'skindb.php';
include("header.php");
?>
<div class="wrapper" style="margin-top:100px; ">
  <div class="title">
    Skin Search
  </div>
<script type="text/javascript" language="javascript">
    var available_skins = Array();
<?php
$skins = [];
$sql = "select name from georgii_skins";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){ ?>
    available_skins.push ('<?php echo $row["name"]; ?>');
<?php }
  }
?>
</script>
<form method="post" autocomplete="off" action="">
  <div class="autocomplete" style="width:300px;" name = "searchskin">
    <input id="skin" type="text" name="skin" placeholder="Skin Name">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Add to Favourites</button>
</form>
<script>
autocomplete(document.getElementById("skin"), available_skins);
</script>
<?php
if (isset($_POST['submit'])){
    $name=$_POST['skin'];
    $sql= "SELECT id from georgii_skins WHERE name = '$name'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $user = $_SESSION["session_uid"];
        $sql = "insert into georgii_fav_skins (skinID, userID)
        values('$id','$user')";
        if ($conn -> query($sql) === TRUE){
            echo "Your information is added successfully";
        }
        else{
            echo "Error" . $conn->error;
        }
    }
    else {
        echo "There are no such skins!";
    }
    
}
?>
</div>
<div class="wrapper">
    <div class="title">
        Your Favourite Skins:
    </div>

</div>