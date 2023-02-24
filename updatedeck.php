<?php $title = "Deck Updater";

$style1="deckstyle.css";
$style2 = "style1.css"; 
$game1 = "Deck Updater";
$logo = "pic/black.jpg";
include 'deckdb.php';
include("header.php");
?>
<br><br><br>
<?php
$a =$_GET['deckName'];
$result = mysqli_query($conn,"Select * from matt_decks
where deckName='$a' ");
$row = mysqli_fetch_array($result);
?>



<div class="wrapper">
    <div class="title">
    Update your Deck below! (Name cannot be changed)
    </div>
<form name="deckUpdate" method="post" action="">
    <div class="form-group">
    <input type="text" name="deckCode" class="form-control" placeholder="Deck Code:"> <br><br>
    </div>
    <div class="form-group">
    <select name="region1" class="form-control">
        <option value="Demacia"> Demacia </option>
        <option value="Noxus"> Noxus </option>
        <option value="Ionia"> Ionia </option>
        <option value="Bilgewater"> Bilgewater </option>
        <option value="Shadow Isles"> Shadow Isles </option>
        <option value="Piltover & Zaun"> Piltover & Zaun </option>
        <option value="Targon"> Targon </option>
        <option value="Shurima"> Shurima </option>
        <option value="Bandle City"> Bandle City </option>
        <option value="Freljord"> Freljord </option>
        <option value="Runeterra"> Runeterra </option>
    </select>
    </div>
    <div class="form-group">
    <select name="region2" class="form-control">
        <option value="Demacia"> Demacia </option>
        <option value="Noxus"> Noxus </option>
        <option value="Ionia"> Ionia </option>
        <option value="Bilgewater"> Bilgewater </option>
        <option value="Shadow Isles"> Shadow Isles </option>
        <option value="Piltover & Zaun"> Piltover & Zaun </option>
        <option value="Targon"> Targon </option>
        <option value="Shurima"> Shurima </option>
        <option value="Bandle City"> Bandle City </option>
        <option value="Freljord"> Freljord </option>
        <option value="Runeterra"> Runeterra </option>
        <option value="None"> None </option>
    </select>
    </div>
    <br>
    <input type="submit" value="Update your Deck" name="update"> <br><br>
    <input type="submit" value="Delete your Deck" name="delete"> <br><br>
</form>
</div>
<?php
if (isset($_POST['update'])){
    $deckCode = $_POST['deckCode'];
    $region1 = $_POST['region1'];
    $region2 = $_POST['region2'];
    $query = mysqli_query($conn, "UPDATE matt_decks set  
    deckCode='$deckCode', region1='$region1', region2='$region2' where deckName='$a' ");

if ($query){
    echo "<h2> Your Deck was updated successfully</h2>";
}
else {
    echo "Deck was not updated.";
}
}

if (isset($_POST['delete'])){
    $query = mysqli_query($conn, "DELETE FROM matt_decks where deckName='$a' ");

if ($query){
        echo "<h2> Your Deck was deleted successfully</h2>";
}
else {
    echo "Deck was not deleted.";
}
}
?>



<?php include("footer.php") ?>