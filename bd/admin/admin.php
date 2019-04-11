

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../otsiv_style.css">
</head>
<body>

<?php
// Количество отзывов на страницу
$per_page=1;


// Подключаю БД
$mysqli = new mysqli("localhost", "root", "", "mydb");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL:{" . $mysqli->connect_errno . "}" . $mysqli->connect_error;
}

// получаем номер страницы
if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;

// вычисляем первый оператор для LIMIT
$start=$page*$per_page;

// Запрос
$q="SELECT * FROM `table1` ORDER BY name LIMIT $start, $per_page";
$res=mysqli_query($mysqli, $q);

// Вывод записи
while($row=mysqli_fetch_array($res)) {
    
  echo $row['name']."<br>\n";
  echo $row['tel']."<br>\n";
  echo $row['email']."<br>\n";
  echo $row['otziv']."<br>\n";
  echo $row['mark']."<br>\n";
  echo $row['time']."<br>\n";

}

// Ссылки на страницы:
$row=mysqli_fetch_row(mysqli_query($mysqli, "SELECT count(*) FROM `table1`"));
$total_rows=$row[0];

$num_pages=ceil($total_rows/$per_page);

for($i=1;$i<=$num_pages;$i++) {
  if ($i-1 == $page) {
    echo $i." ";
  } else {
    echo '<a href="'.$_SERVER['admin.php'].'?page='.$i.'">'.$i."</a> ";
  }
}






















// Количество вывод юзеров на страницу
// $users_on_page="1";

// // Считаю кол-во юзеров
// $count=mysqli_fetch_array(mysqli_query($mysqli, "SELECT COUNT(id) FROM table1"));

// // Считаю страницы
// $total=ceil($count[0]/$users_on_page);

// // Страницы
// if(empty($_GET["p"])){$_GET["p"]="1";}
// $p=$_GET["p"];

// // Запрос
// $first=$p*$users_on_page-$users_on_page;
// $result=mysqli_query($mysqli, "SELECT * FROM `table1` limit $first, $users_on_page");



// while ($row=mysqli_fetch_array($result)) {
//   ?>  
<!-- //  <div class="comment">
//     <div> Имя: <?=$row['name']?></div>
//     <div> Телефон: <?=$row["tel"]?></div>
//     <div> Email: <?=$row["email"]?></div>
//     <div> Отзыв: <?=$row["otziv"]?></div>
//     <div> Оценка: <?=$row["mark"]?></div>
//     <div> Время: <?=$row["time"]?></div>
// </div>  -->
//  <?php   
// }
//  $mysqli->close();
// ?>
// <?php
// if($total>1):
// 	#две назад
// 	// print "<br><div>";
// 	// if(($p-2)>0):
// 	//   $p_two_left="<a class='first_page_link' href='admin.php?p=".($p-2)."'>".($p-2)."</a>  ";
// 	// else:
// 	//   $p_two_left=null;
// 	//  endif;
			
// 	#одна назад
// 	if(($p-1)>0):
// 	  $p_one_left="<a class='first_page_link' href='admin.php?p=".($p-1)."'>".($p-1)."</a>  ";
// 	  $p_temp=($p-1);
// 	else:
// 	  $p_one_left=null;
// 	  $p_temp=null;
// 	 endif;
			
// 	#две вперед
// 	// if(($p+2)<=$total):
// 	//   $ptworight="  <a class='first_page_link' href='admin.php?p=".($p+2)."'>".($p+2)."</a>";
// 	// else:
// 	//   $ptworight=null;
// 	//  endif;
			
// 	#одна вперед
// 	if(($p+1)<=$total):
// 	  $poneright="  <a class='first_page_link' href='admin.php?p=".($p+1)."'>".($p+1)."</a>";
// 	  $p_temp2=($p+1);
// 	else:
// 	  $poneright=null;
// 	  $p_temp2=null;
// 	 endif;		
			
// 	# в начало
// 	if($p!=1 && $p_temp!=1 && $p_temp!=2):
// 	  $prevp="<a href='admin.php' class='first_page_link' title='В начало'><<</a> ";
// 	else:
// 	  $prevp=null;
// 	 endif;   
			
// 	#в конец (последняя)
// 	if($p!=$total && $p_temp2!=($total-1) && $p_temp2!=$total):
// 	  $nextp=" ...  <a href='admin.php?p=".$total."'".$total."' class='first_page_link'>$total</a>";
// 	else:
// 	  $nextp=null;
// 	 endif;
		
// 	print "<br>".$prevp.$p_two_left.$p_one_left.'<span class="num_page_not_link"><b>'.$p.'</b></span>'.$poneright.$ptworight.$nextp; 
// 	print "</div>";
// endif;
// // mysql_close();
?>
</body>
</html>
