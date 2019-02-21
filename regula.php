<pre>
<html>
<head>
<title></title>
</head>

<body>
<form action="regula.php" method="post">
    <textarea name="text" id="" cols="100" rows="10"></textarea>
    <input type="submit" value="Отправить">
</form>



<?php
 include "function_reg.php";
 $str = $_POST['text'];

//ВЫВОДИТ ТОЛЬКО ПЛОХИЕ СЛОВА
if(!empty($words=bad_words($_POST['text']))){
     foreach($words as $v){
         echo $v."<br>";
     }
 }else{
      echo bb_cod(smile($str));
 }


//print_r(smile($str));


//echo preg_match_all ("/дурак|дура|редиска/iu", $_POST['text'],$matches);



//ЦЕНЗУРА

// function bed($str)
// {
//     $search = array(
//         "/дурак/",
//         "/дура/",
//         "/редиска/",
//     );

//     $rep = array(
//         '/\*/',
//         '/\*/',
//         '/\*/',
//     );
//     $str2 = preg_replace($search, $rep, $str);
//     return $str2;
// }

// print_r(bed($str));



//КВАДРАТНЫЕ СКОБКИ ЗАМЕНЯЮТСЯ ОБЫЧНЫМИ ТЕГАМИ
//$pat = "/\[b\](.*)\[\/b\]/i";


//СМАЙЛ МЕНЯЕТСЯ НА ДРУГОЙ ЦВЕТ
$pat = array();
$pat[0] = "/\;\)/";
$pat[1] = "/\:\)/";
$pat[2] = "/\:\-\)/";
$rep = array();
$rep[0] = '<b style="color:red">$0</b>';
$rep[1] = '<b style="color:green">$0</b>';
$rep[2] = '<b style="color:yellow">$0</b>';



//$pat="/\;\)&\:\)/i";
//$pat = "//";
//$rep = "<b>$1</b>";


?>



<hr>

<?php

?>
</body>
</html>