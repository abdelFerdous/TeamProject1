<?php $title="Skin Database" ; include("header.php"); include("skinarrays.php");$style1="style1.css"; ?>
<form method="post" action="">
<div class="row" style="margin: 0">
<div class="col-md" style="padding-left: 0; padding-right:10px">
<!-- it's just an example of form, later
want to implement one search box with autocomplete
here -->
<div class="form-floating">
  <select class="form-select" name="champ">     
    <option value="ahri"> Ahri </option>
    <option value="amumu"> Amumu </option>
    <option value="akshan"> Akshan </option>
  </select>
</div>
</div>
</div>
<button type="submit" name="submit" class="btn btn-primary" style="margin-top: 5px">Search</button>
</form>

<?php
if (isset($_POST['submit'])){
    $champ=$_POST['champ'];
    
    switch ($champ) {
        case "ahri":
            echo "<select class='form-select' name='skinselect'>" ;
            for ($i = 0; $i < sizeof($ahri_skins); $i++){
            echo "     
            <option value='$ahri_skins[$i]'> $ahri_skins[$i] </option>
            ";
            }
            echo "</select>";
            break;
        case "amumu":
            echo "<select class='form-select' name='skinselect'>" ;
            for ($i = 0; $i < sizeof($amumu_skins); $i++){
            echo "     
            <option value='$amumu_skins[$i]'> $amumu_skins[$i] </option>
            ";
            }
            echo "</select>";
            break;
        case "akshan":
            echo "<select class='form-select' name='skinselect'>" ;
            for ($i = 0; $i < sizeof($akshan_skins); $i++){
            echo "     
            <option value='$akshan_skins[$i]'> $akshan_skins[$i] </option>
            ";
            }
            echo "</select>";
            break;
    }
}
?>


<?php include("footer.php") ?>