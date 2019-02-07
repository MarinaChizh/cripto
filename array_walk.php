<pre>
<?php
$a1 = array(1,2,3,4,5,6,7,8,9,10);
print_r($a1);

array_walk($a1, function($item, $key){echo "$key => $item <br>";});
?>

<?php
array_walk($a1, function(&$item, $key, $sp){$item="$key $sp $item" ;
}, "=");
print_r($a1);