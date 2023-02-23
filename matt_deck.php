<?php $style1="deckstyle.css" ;
$title = "Deck Database";
$style2 = "style1.css";
$game1 = "Legend of Runterra Deck";
$logo = "pic/black.jpg";
include("header.php") ?>



<div class="wrapper">
    <div class="title">
Enter you Deck here!
    </div>
<form name="deckform" method="post" action="" onsubmit="return deckval()">
    <div class="form-group">
    <input type="text" name="email" class="form-control" placeholder="Account Email:" required> <br><br>
    <input type="text" name="deckName" class="form-control" placeholder="Deck Name:" required> <br><br>
    <input type="text" name="deckCode" class="form-control" placeholder="Deck Code:" required> <br><br>
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
    <input type="submit" value="Submit" name="Submit">
</form>
</div>

<?php
if(isset($_POST["Submit"])){
$email = $_POST['email'];
$deckName = $_POST['deckName'];
$deckCode = $_POST['deckCode'];
$region1 = $_POST['region1'];
$region2 = $_POST['region2'];
include 'deckdb.php';
$sql = "insert into matt_decks (email, deckName, deckCode, region1, region2)
values('$email', '$deckName', '$deckCode', '$region1', '$region2')";

if ($conn ->query($sql) === TRUE){
        echo "<h2>Your information was added successfully</h2>";
}
else {
    echo "ERROR: Your information was not added successfully" . $conn->error;
}
}
?>

<div class="wrapper">
    <div class="title">
Check Your Decks Here!
    </div>
<form name="checkform" method="post" action="deckcheck.php" onsubmit="return checkval()">
    <div class="form-group">
    <input type="text" name="checkEmail" class="form-control" placeholder="Account Email:" required> <br><br>
    </div>
    <br>
    <input type="submit" value="Check" name="Check">
</div>






</body>


<?php include("footer.php") ?>