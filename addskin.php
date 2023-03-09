<?php
$title = "Add item";
$style2 = "style1.css";
$style1 = "georgii_fav.css";
$game1 = "Add Skins";
$logo = "pic/LOL Logo clear background.png";
include "skindb.php";
include("header.php") ?>

<div class="wrapper" style="margin-top:100px; ">
  <div class="title">
    Add League of Legends skin
  </div>
  <form name="skinadd_form" method="post" action="" onsubmit="return valSkin()">

    <input type="text" class="form-control" name="champ" placeholder="Champion" required><br><br>
    <input type="text" class="form-control" name="sname" placeholder="Name" required><br><br>
    <input type="number" class="form-control" name="price" placeholder="Price (0 if cannot buy)"><br><br>
    <input type="text" class="form-control" name="showcase" placeholder="YT Showcase"><br><br>
    
    <div class="row">
    <div class="col-md-12">
    <input type="submit" type="button" class="btn btn-primary" value="Submit" name="submit">
    </div>
    </div>

    <!-- PHP area -->
    <?php
    if (isset($_POST['submit'])){
    $champ=$_POST['champ'];
    $name=$_POST['sname'];
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
<div class="container">
    <div class="title">
        All skins:
    </div>
    <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <!-- Create column headers for the search results table -->
                                <th>Champion</th>
                                <th>Skin Name</th>
                                <th>Price</th>
                                <th>Showcase Link</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $user = $_SESSION["session_uid"];
                            $sql = "SELECT * FROM georgii_skins";
                            $result = $conn->query($sql);
                            if ($result && $result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                    echo"
                                        <tr>
                                        <td>$row[champ]</td>
                                        <td>$row[name]</td>
                                        <td>$row[cost]</td>
                                        <td>$row[showcase]</td>
                                        <td><a href='update_skin.php?id=$row[id]'>Edit/Del</a></td>
                                        </tr>";
                                }
                            }
                            else {
                                echo '
                                <tr>
                                    <td colspan="5">No Record Found</td> 
                                </tr>
                                ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
<?php include('footer.php') ?>