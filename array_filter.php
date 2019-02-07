<pre>
<?php

$a1 = array(1,-2,3,4,-5,6,-7,-8,9,10);
print_r($a1);

$a2 = array_filter($a1, function($x){return $x>=0;});
print_r($a2);
?>


<?php

$a3  = array("Masha", "Misha", "Sveta", "Marina");
print_r($a3);

$a4 = array_filter($a3, function($x1){return $x1[0] == "M";});
print_r($a4);
?>

<?php
$a5 = array_filter($a3, function($x2){return strlen($x2)==5;});
print_r($a5);


