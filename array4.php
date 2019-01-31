<pre>
<?php
$a = [1,2,3,5,8];
function product($a){
    $p=1;
    foreach ($a as $value) {
        $p=$p*$value;
    }
    return $p;
}
function product2($a){
    $p=1;
    for ($i=0; $i < count($a); $i++) { 
        $p=$p*$a[$i];
} return $p;
}

echo product($a);
echo"<br>";
echo product2($a);
?>