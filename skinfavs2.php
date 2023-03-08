<?php $title = "Skin Search";

$style2 = "style1.css";
$style1 = "georgii_fav.css";
$game1 = "Skin search";
$logo = "pic/LOL Logo clear background.png";
include 'skindb.php';
include("header.php");
?>
<script type="text/javascript">
    function showcaseIframe(url) {
        var iframe = document.createElement('iframe');
        iframe.id = "showcaseiframe";
        iframe.src = "https://www.youtube.com/embed/" + url + "?&autoplay=1&mute=1";
        document.body.appendChild(iframe);
    }
    function deleteIframe(){
        var iframe = document.getElementById('showcaseiframe');
        iframe.remove();
    }
</script>
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
        $sql_check = "SELECT * from georgii_fav_skins WHERE skinId = '$id' AND userID = '$user'";
        $result_check = $conn->query($sql_check);
        if ($result_check->num_rows < 1){
            $sql = "insert into georgii_fav_skins (skinID, userID)
            values('$id','$user')";
            if ($conn -> query($sql) === TRUE){
                echo "Your information is added successfully";
            }
            else{
                echo "Error" . $conn->error;
            }
        }
        else{
            echo "There is such skin already in your favourites";
        }
    }
    else {
        echo "There are no such skins!";
    }
    
}
?>
</div>
<div class="container">
    <div class="title">
        Your Favourite Skins:
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $user = $_SESSION["session_uid"];
                            $sql = "SELECT georgii_skins.champ, georgii_skins.name, georgii_skins.cost, georgii_skins.showcase, georgii_fav_skins.entryID
                                      FROM georgii_skins 
                                      INNER JOIN georgii_fav_skins ON georgii_skins.id=georgii_fav_skins.skinID WHERE georgii_fav_skins.userID = '$user'";
                            $result = $conn->query($sql);

                            if ($result && $result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                                    echo"
                                        <tr onmouseover='showcaseIframe(\"" .$row["showcase"] . "\")' onmouseout='deleteIframe()'>
                                        <td>$row[champ]</td>
                                        <td><a href='delete_fav.php?id=$row[entryID]'>$row[name]</a></td>
                                        <td>$row[cost]</td>
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
<?php include "footer.php"?>