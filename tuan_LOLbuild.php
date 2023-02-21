<?php

$title = " Reading Data from the database";

include 'tuan_LOLdb.php';
$sql = "select * from capp1";
$result = $conn->query($sql);
if($result !== false && $result->num_rows > 0){
    echo "
    <table class = 'table'>
    <tr><th>Champion</th><th>Role</th>
    <th>item</th></tr>";

    while($result !== false && $row = $result -> fetch_assoc()){

    
    echo"
        <tr>
        
        <td><a href ='tuan_LOLbuild.php?id=$row[champion]'>$row[champion]</a></td>
        <td>$row[role]</td>
        <td>$row[item]</td>
        </tr>
        ";  
        
    }
    echo"</table>";
    }
    else
    {
        echo "No Results";
    }
    $conn->close();


?>