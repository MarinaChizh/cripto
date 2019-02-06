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


function my_array_reverse ($array) {
    $k = 0;
    for ($i=count($array)-1; $i >= 0; $i--) {
        $reverse[$k] = $array[$i];
        $k++;
    }
    return $reverse;
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
