<pre>
<?php
	$arr = [1, 2, 3, 4, 5];
	print_r($arr);
?>
</pre>


<pre>
<?php
	$arr = [1, 2, 3, 4, 5];
	$arr = array_reverse($arr);
	print_r($arr);
?>
</pre>


<pre>
<?php
    $arr1 = array('one' => 1, 'two' => 2, 'three' => 3  );
    $a = array_search(3, $arr1);
    print_r ($a);
?>

<?php
function f ($arrf){
for ($k=0; $k < count($arrf)+1; $k++) { 
    for ($i=0; $i < count($arrf)-1; $i++) { 
      if ($arrf[$i]<$arrf[$i+1]) {
          $b=$arrf[$i+1];
          $arrf[$i+1]=$arrf[$i];
          $arrf[$i]=$b;
      }  
    }
    
}
return $arrf;
}
$a=array(1,2,3,4,5 );


print_r(f($a));
?>
