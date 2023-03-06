<?php $title = "Skin Search";

$style2 = "style1.css";
$style1 = "tuan_deck.css";
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
    var available_champs = Array();
<?php
$champs = [];
$sql = "select champ from georgii_skins";
$result = $conn->query($sql);
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){ ?>
    available_champs.push ('<?php echo $row["champ"]; ?>');
<?php }
  }
?>
</script>
  <form name="skinadd_form" method="post" action="" id="skinadd_form">
  <script type="text/javascript" language="javascript">
    champSelect(available_champs);
  </script>
  </form>
</div>
<?php
include("footer.php");
?>