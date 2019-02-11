Результат:  

<pre>
<?php
$array = array($_POST['v1'],$_POST['v2']);
if ($_POST['action'] == 'array_sum') { 
    echo array_sum($array);
	    
    } elseif ($_POST['action'] == 'array_product') {    
        echo array_product($array);
           
        } elseif ($_POST['action'] == 'pow') 
            echo pow($_POST['v1'],$_POST['v2']);
        
        

?>


<html>
<head>
<title></title>
</head>

<body>
<form action="closures.php" method="post">
<select name="action">
    <option>array_sum</option>
    <option>array_product</option>
	<option>pow</option>
	<option></option>
	<option></option>
	<option></option>
</select>

<input type="text" name="v1"> 
<input type="text" name="v2"> 

<input type="submit" value="Результат">
</form></body>

</html>
