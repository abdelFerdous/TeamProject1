<?php $stylesheet="deckstyle.css" ;$title = "Deck Database";include("header.php") ?>



<div class="wrapper">
    <div class="title">
Enter you Deck here!
    </div>
<form method="post" action="">
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
    <input type="submit" value="Submit" name="submit">
</form>
</div>


</body>


<?php include("footer.php") ?>