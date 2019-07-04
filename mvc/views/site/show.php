<table border = "1" style="border-collapes:collapse">
<?php
foreach($table as $v){
    echo "<tr>";
    
    foreach($v as $val){
        echo "<td>$val</td>";
    }
    echo "<td><a href='$targetDelURL&id=".$v['id']."'>Delete</td>";
    echo "<td><a href='$targetEditURL&id=".$v['id']."'>Edit</td></tr>";
    // echo "</tr>";

    
}
?>
</table>