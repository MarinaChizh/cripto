<?php
$str = $_POST['text'];
function bb_cod ($str){
    $search = array(
        "/\[b\](.*)\[\/b\]/i",
        "/\[i\](.*)\[\/i\]/i",
        "/\[u\](.*)\[\/u\]/i",
    );

    $rep = array(
        "<b>$1</b>",
        "<i>$1</i>",
        "<u>$1</u>", 
    );
$str2 = preg_replace($search, $rep, $str);
return $str2;
}

function smile ($str){
    $search = array(
        "/\;\)/", 
        "/\:\)/",
        "/\:\-\)/",
    );

    $rep = array(
        '<img src="S1.png" height="100">',
        '<img src="S2.png" height="100">',
        '<img src="S3.png" height="100">',
    );
$str2 = preg_replace($search, $rep, $str);
return $str2;
}

function bad_words($str){
    preg_match_all("/дурак|дура|редиска/iu", $_POST['text'], $matches);
    return $matches[0];
}

function bed($str)
{
    $search = array(
        "/дурак/iu",
        "/дура/iu",
        "/редиска/iu",
    );

    $rep = array(
        '*',
        '*',
        '*',
    );
    $str2 = preg_replace($search, $rep, $str);
    return $str2;
}


?>