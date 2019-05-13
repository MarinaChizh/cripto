<?php
$rows = 3; 
$cols = 3; 

$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $table .= '<td>'.'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;















?>