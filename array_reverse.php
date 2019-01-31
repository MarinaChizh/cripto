<pre>
<?php
	$arr = [1, 2, 3, 4, 5];
	print_r($arr);
?>



<?php
	$arr = [1, 2, 3, 4, 5];
	$arr = array_reverse($arr);
	print_r($arr);
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
</pre>