<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style_DB.css">
</head>

<body>
    <?php
    include_once "DB_entity.php";
    $link = mysqli_connect("127.0.0.1", "root", "", "mydb");
    $DB = new DB_entity($link, 'db_entity');

    function show($array)
    {
        echo "\t\n<table>";
        foreach ($array as  $v) {
            echo "\t\n<tr>";
            foreach ($v as  $val) {
                echo "\t<td>$val</td>";
            }
            echo '</tr>';
        }
        echo '</table><hr>';
    }




    // $DB->add_having_condition("CITY='Витебск'");
    $DB->add_select_field('CITY')->add_group_by('CITY')->add_having_condition("CITY='Витебск'");
    // $DB->add_select_field('CITY')->add_select_field('count(*)')->add_group_by('CITY');
    echo "<pre>" . $DB->get_sql() . "</pre>";
    echo show($DB->query());














    ?>
</body>

</html>