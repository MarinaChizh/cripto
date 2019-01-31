<pre>
<?php
$a=array("image 10", "image 4", "image 8", "image 5", "image 3", "image 1", "image 2", "image 7", "image 6", "image 9" );
print_r($a);
?>

</pre>

<pre>
<?php
$a=array("image 10", "image 4", "image 8", "image 5", "image 3", "image 1", "image 2", "image 7", "image 6", "image 9" );
natsort($a);
print_r($a);
?>
</pre>

<pre>
<?php
$a=array("image 10", "image 4", "image 8", "image 5", "image 3", "image 1", "image 2", "image 7", "image 6", "image 9" );
sort($a);
print_r($a);
?>
</pre>

<pre>
<?php
$ar1 = array ("10", 100, 100, "a");
$ar2 = array (1, 3, "2", 1);
array_multisort ($ar1, $ar2);

print_r($ar2);
print_r($ar1);
?>
</pre>
<pre>
<?php
$name=array ("Ivan", "Vova", "Marysa");
$many=array (1000, 2785, 123);
array_multisort($name, SORT_ASC,
 $many, SORT_DESC);
print_r($name);
print_r($many);
?>
<pre>
<?php
$array1 = array(1,1,1,3,2,5);
$array2 = array (5,6,2,2,3,5) 
?>
