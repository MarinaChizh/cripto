<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <pre>
    <?php
    $link = mysqli_connect("127.0.0.1", "root", "", "mydb");
    include "DB_entity.php";
    $DB = new DB_entity($link, 'db_entity');
    echo $DB->get_sql();
    print_r($DB->query());
    $DB->add_where_conditin("CITY='Витебск'");
    echo $DB->get_sql();
    $DB->add_where_conditin("RATING >300");
    echo $DB->get_sql();
    $DB->delete();
    print_r($DB->query());
    echo $DB->get_sql();
    // $DB->order_by_asc("RATING");
    print_r($DB->query());
    echo $DB->get_sql();
    $DB->order_by_desc("RATING");
    echo $DB->get_sql();
    print_r($DB->query());
    $DB->reset_select();
    echo $DB->get_sql();
    $DB->add_select_field('FIO');
    $DB->add_select_field('RATING');

    echo $DB->get_sql();
    print_r($DB->query());
    














    ?>
    </pre>
</body>

</html>