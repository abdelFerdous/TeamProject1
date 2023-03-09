<?php 
$title = "Update Skins";
$style2 = "style1.css";
$style1 = "georgii_fav.css";
$game1 = "Skin update";
$logo = "pic/LOL Logo clear background.png";
include 'skindb.php';
include 'header.php';
$a = $_GET['id'];
$res = mysqli_query($conn, "select * from georgii_skins where id = '$a'");
$row = mysqli_fetch_array($res);
?>
<div class="wrapper" style="margin-top:100px; ">
  <div class="title">
    Update League of Legends skin
  </div>
  <form name="skinadd_form" method="post" action="">

    <input type="text" class="form-control" name="champ" placeholder="Champion" required value="<?php echo $row['champ'];?>"><br><br>
    <input type="text" class="form-control" name="name" placeholder="Name" required value="<?php echo $row['name'];?>"><br><br>
    <input type="number" class="form-control" name="price" placeholder="Price (0 if cannot buy)" value="<?php echo $row['cost'];?>"><br><br>
    <input type="text" class="form-control" name="showcase" placeholder="YT Showcase" value="<?php echo $row['showcase'];?>"><br><br>
    
    <div class="row">
    <div class="col-md-12">
    <input type="submit" type="button" class="btn btn-primary" value="Submit" name="update">
    <input type="submit" type="button" class="btn btn-danger" value="Delete" name="delete">
    </div>
    </div>
<?php 
    if(isset($_POST['update'])){
        $champ = $_POST['champ'];
        $name = $_POST['name'];
        $price=intval($_POST['price']);
        $showcase=$_POST['showcase'];

        $query = mysqli_query($conn, "UPDATE georgii_skins set champ='$champ', 
        name='$name', cost='$price', showcase='$showcase' where id='$a' ");
        if ($query){
            echo '<script>alert("Updated successfully!")</script>';
            echo '<script>window.location.href = "addskin.php";</script>';
        }
        else{
            echo '<script>alert("Failed to update!")</script>';
            echo '<script>window.location.href = "addskin.php";</script>';
        }
    }
    if(isset($_POST['delete'])){
        $query = mysqli_query($conn, "DELETE FROM georgii_skins WHERE id='$a' ");
        if ($query){
            echo '<script>alert("Deleted successfully!")</script>';
            echo '<script>window.location.href = "addskin.php";</script>';
        }
        else{
            echo '<script>alert("Failed to delete!")</script>';
            echo '<script>window.location.href = "addskin.php";</script>';
        }
    }
?>
</div>
<?php
include 'footer.php';
?>