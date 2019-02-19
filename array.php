<pre>
<?php
function f ($arr){
for ($k=0; $k < count($arr)+1; $k++) { 
    for ($i=0; $i < count($arr)-1; $i++) { 
      if ($arr[$i]<$arr[$i+1]) {
          $b=$arr[$i+1];
          $arr[$i+1]=$arr[$i];
          $arr[$i]=$b;
      }  
    }
    
}
return $arr;
}
$a=array(13, 2, 65, 3, 9, 1, 4 );
shuffle($a);

print_r(f($a));
?>
<pre>
    <?php
    $arrayName = array(13, 2, 65, 3, 9, 1, 4);
    arsort($arrayName);
        print_r($arrayName);
shuffle($arrayName);
      ?>
</pre>
<?php
$timeus=microtime();
for ($i = 1; $i < 10000; $i++) { 
       f($a);
}
echo $t1=microtime()-$timeus.    "Пользовательская";
echo "<br>";

$times=microtime();
for ($i = 1; $i < 10000; $i++) { 
       sort($arrayName);
}
echo $t2=microtime()-$times.  "Встроенная";
echo "<br>";
echo floor($t1/$t2);
?>
