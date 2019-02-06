<?php
function my_array_product ($array){
    $result = 1;
	foreach ($array as $element) {
		$result = $result * $element;
	}
    return ($result); 
}


function my_array_sum ($array){
$result=0;
foreach ($array as $element) {
    
    $result = $result + $element;
}
return ($result); 
}


function my_array_reverse ($array){
    for ($k=0; $k < count($array); $k++) { 
        for ($i=0; $i < count($array); $i++) { 
          if ($array[$i]<$array[$i+1]) {
              $b=$array[$i+1];
              $array[$i+1]=$array[$i];
              $array[$i]=$b;
          }  
        }
        
    }
    return $array;
    }


function my_array_search ($needle, $array) {
foreach ($array as $key=>$value) {
    if ($value == $needle) $search = $key;
        }
return $search;
}

function my_in_array ($needle, $array1) {
$in = false;
foreach ($array1 as $value) {
    if ($value == $needle) $in = true;
    }
return $in;
}

function my_array_key_exists ($needle, $array) {
$key_exists = false;
foreach ($array as $key=>$value) {
    if ($key == $needle) $key_exists = true;
    }
return $key_exists;
}


function my_array_flip ($array) {
foreach ($array as $key=>$value) {
    $flip[$value] = $key;
    }
return $flip;
}

function my_array_keys ($array) {
foreach ($array as $key=>$value) {
    $keys[] = $key;
    }
return $keys;
}
    













?>
