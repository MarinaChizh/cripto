<?

require_once "Tic_Tac_Toe_Para.php";
require_once "comp_igra.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

</body>

</html>

<?
// $obj = new Tic_Tac_Toe (3);
$obj = new Igra(3);
$obj->random_put_circle();
$obj->random_put_cross();
$obj->show();
$obj->random_put_circle();
$obj->random_put_cross();
$obj->show();
$obj->random_put_circle();
$obj->random_put_cross();
$obj->show();
$obj->random_put_circle();
$obj->random_put_cross();
$obj->show();
echo $obj->check_winner();


// $obj -> put_cross();
// $obj->show();
// $obj -> put_circle();
// $obj->show();
// $obj -> put_cross();
// $obj->show();
// echo $obj->check_winner();


// столбец Х
// $obj->show();
// $obj->put_circle(3,1);
// $obj->show();
// $obj->put_cross(1,2);
// $obj->show();
// $obj->put_circle(1,2);
// $obj->show();
// $obj->put_cross(0,0);
// $obj->show();
// $obj->put_circle(0,1);
// $obj->show();
// $obj->put_cross(1,0);
// $obj->show();
// $obj->put_circle(2,1);
// $obj->show();
// $obj->put_cross(2,0);
// $obj->show();
// echo $obj->check_winner();

// диагональ О
// $obj->show();
// $obj->put_circle(3,1);
// $obj->show();
// $obj->put_cross(1,2);
// $obj->show();
// $obj->put_circle(1,2);
// $obj->show();
// $obj->put_cross(0,1);
// $obj->show();
// $obj->put_circle(0,2);
// $obj->show();
// $obj->put_cross(1,0);
// $obj->show();
// $obj->put_circle(1,1);
// $obj->show();
// $obj->put_cross(2,1);
// $obj->show();
// $obj->put_circle(2,0);
// $obj->show();
// echo $obj->check_winner();

// горизонт О
// $obj->show();
// $obj->put_circle(3,1);
// $obj->show();
// $obj->put_cross(1,2);
// $obj->show();
// $obj->put_circle(1,2);
// $obj->show();
// $obj->put_cross(1,1);
// $obj->show();
// $obj->put_circle(0,0);
// $obj->show();
// $obj->put_cross(1,0);
// $obj->show();
// $obj->put_circle(0,1);
// $obj->show();
// $obj->put_cross(2,1);
// $obj->show();
// $obj->put_circle(0,2);
// $obj->show();
// echo $obj->check_winner();


// диагональ X
// $obj->show();
// $obj->put_circle(3,1);
// $obj->show();
// $obj->put_cross(1,2);
// $obj->show();
// $obj->put_circle(1,2);
// $obj->show();
// $obj->put_cross(0,2);
// $obj->show();
// $obj->put_circle(0,0);
// $obj->show();
// $obj->put_cross(1,1);
// $obj->show();
// $obj->put_circle(0,1);
// $obj->show();
// $obj->put_cross(2,0);
// $obj->show();
// $obj->put_circle(0,2);
// $obj->show();
// echo $obj->check_winner();
