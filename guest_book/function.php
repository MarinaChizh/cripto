<?php
function get_msg_and_nik_from_xml($str)
{
    $matches = null;
    preg_match_all('/<post>(.*?)(<msg>(.*?)<\/msg>)(.*?)(<nik>(.*?)<\/nik>)(.*?)(<email>(.*?)<\/email>)(.*?)(<date>(.*?)<\/date>)(.*?)<\/post>/ius', $str, $matches);

    $msg = $matches[3];
    $nik = $matches[6];
    $email = $matches[9];
    $date = $matches[12];

    $array = array();
    foreach ($msg as $key => $value) {
        $array[] = array("msg" => $msg[$key], "nik" => $nik[$key], "email" => $email[$key], "date" => $date[$key]);
    }

    return  $array;
}

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
        '<img src="S1.png" height="13">',
        '<img src="S2.png" height="13">',
        '<img src="S3.png" height="13">',
    );
$str2 = preg_replace($search, $rep, $str);
return $str2;
}



function bad($str)
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