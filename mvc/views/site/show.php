<table border = "1" style="border-collapes:collapse">
<?php
foreach($table as $v){
    echo "<tr>";
    foreach($v as $val){
        echo "<td>$val</td>";
    }
    echo "</tr>";
}
?>
</table>