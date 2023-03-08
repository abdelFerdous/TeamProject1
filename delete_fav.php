<?php 
include "skindb.php";
    $a = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM georgii_fav_skins WHERE entryID='$a';");
        if ($query){
            echo "<h2>Your info is updated successfully</h2>";
        }
        else{
            echo "Failed to delete your info";
        }
        echo '<script>window.location.href = "skinfavs2.php";</script>';
?>