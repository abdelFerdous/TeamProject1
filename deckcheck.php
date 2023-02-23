<?php $title = "Deck Checker";

$style1="deckstyle.css";
$style2 = "style1.css"; 
$game1 = "DeckCheck";
$logo = "pic/black.jpg";
include 'deckdb.php';
include("header.php");
?>
<br><br><br>

<?php
$checkEmail = $_POST['checkEmail'];

$sql = "select * from matt_decks
where email='$checkEmail' "; 
$result = $conn->query($sql);
if ($result->num_rows > 0){
    echo "
    <table class='table'>
        <tr><th>Deck Name</th><th>Deck Code</th><th>Region 1</th><th>Region 2</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "
        <tr>
        <td>$row[deckName]</td>
        <td>$row[deckCode]</td>
        <td>$row[region1]</td>
        <td>$row[region2]</td>
        </tr>";
}
echo "</table>";
}
else {
    echo "NO RESULTS";
}
$conn->close();


?>




<?php
include 'footer.php';
?>