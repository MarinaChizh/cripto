<?php
$str="быть";
$str="или		не быть";

// $pat="/^(быть)|(или\sне\sбыть)$/iu";
$pat="/^(быть)$|^(или не\s+быть)$/iu";
if (preg_match ($pat, $str)) {
    echo "Вхождение найдено.";
} else {
    echo "Вхождение не найдено.";
}
?>