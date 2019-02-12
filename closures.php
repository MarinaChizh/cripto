Результат:  

<pre>
<?php


function sum2($a){
    return $a[0]+$a[1];
}

$array = array($_POST['v1'],$_POST['v2']);

        
            $formula = $_POST['action'];
            echo $formula($array); 
            if ($_POST['action'] == 'pow') 
            echo pow($_POST['v1'],$_POST['v2']);  

?>


<html>
<head>
<title></title>
</head>

<body>
<form action="closures.php" method="post">
<select name="action">
    <option value="array_sum" >array_sum</option>
    <option value="array_product" >array_product</option>
    <option value="pow" >pow</option>
    <option value="sum2" >sum2</option>
</select>

<input type="text" name="v1"> 
<input type="text" name="v2"> 

<input type="submit" value="Результат">
</form></body>

</html>
