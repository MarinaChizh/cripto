<?php
class Attr{
    function getAttribute($attr){
$str = "";
foreach ($attr as $key => $item) {
$str .= $key ."=>".$item;
}
    
return $str;
    }

function color($attr){
    $attr = $this->getAttribute($attr);
return $attr;
}
}
$color = new Attr();
echo $color->color(['style' => 'color']);


?>