<?php
$a=(4>1)?"Да":"Нет";
echo $a;
?>
<pre><?php
function cmp($a, $b){
    if (gettype($a)==gettype($b)) {
        return ($a<$b) ? -1 : 1;
    }
    return(is_string($a)) ? 1 : -1;
}
$arr = array (5, '4', 3, '2', 1);
usort($arr, "cmp");
print_r($arr);

?></pre>
<pre><?php
$arr = array("one", "two", "three");
echo current($arr)."<br>";
next($arr);
echo current($arr)."<br>";
reset($arr);
echo current($arr)."<br>";
end($arr);
echo current($arr)."<br>";
?></pre>
<pre><?php
$arr = array("one", "two", "three");
for ($i=0; $i < count($arr); $i++) { 
    # code...
}
echo $arr[i];

?></pre>