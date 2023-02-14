<?php $title = "Deck Database";include("header.php") ?>

<form method="post" action="">
    <input type="text" name="deckName" placeholder="Deck Name:" required> <br><br>
    <input type="text" name="deckCode" placeholder="Deck Code:" required> <br><br>
    <select name="region1">
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
    <select name="region2">
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
    <input type="submit" value="Submit" name="submit">
</form>



<?php include("footer.php") ?>