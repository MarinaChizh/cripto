<?php
 //Считывает массив из строки xml 
function get_msg_and_nik_from_xml($str)
{
    $matches = null;
    preg_match_all('/<post>(.*?)(<msg>(.*?)<\/msg>)(.*?)(<nik>(.*?)<\/nik>)<\/post>/ius', $str, $matches);

    $msg = $matches[3];
    $nik = $matches[6];


    $array = array();
    foreach ($msg as $key => $value) {
        $array[] = array("msg" => $msg[$key], "nik" => $nik[$key]);
    }

    return  $array;
}


//Конвертирует массив в xml строку
function put_array_to_xml($array)
{
    $str = "";
    foreach ($array as $value) {
        $str .= "<post>\n\t<msg>$value[msg]</msg>\n\t<nik>$value[nik]</nik>\n\t<email>$value[email]</email>\n\t<date>$value[date]</date>\n</post>\n";
    }
    return $str;
}

//Переводит bb код
function bb_cod($str)
{
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

//Смайлик
function smile($str)
{
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



//Плохие слова
// function bad($str)
// {
//     $search = "/дурак|дура|редиска/iu";
//     $rep = '*';
//     $str2 = preg_replace($search, $rep, $str);
//     return $str2;
// }
function bad($str)
{
    $pat = "/дурак|дура|редиска/iu";
    preg_match_all($pat, $str, $arr);
    return $arr[0];
}
 