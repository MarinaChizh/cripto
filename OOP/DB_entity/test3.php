<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "DB_entity.php";
    $link = mysqli_connect("127.0.0.1", "root", "", "mydb");
    $DB = new DB_entity($link, 'db_entity');

    function show($array) {
    if(is_array($array)) {
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
    }
    }
    
    
    $DB->reset_defaut_select();
if (isset($_POST['FIO'])){
    $DB->add_where_condition("FIO LIKE '%" .$_POST['FIO']."%'");
}
if (isset($_POST['CITY'])){
    $DB->add_where_condition("jfyurt LIKE '%" .$_POST['CITY']."%'");
}


    echo "<pre>" . $DB->get_sql() . "</pre>";
    echo show($DB->query());
    print_r ($DB->error_list);
    ?>
    <form name="" method="post" action="">
        <input type="text" name="FIO">
        <input type="text" name="CITY">
        <input type="submit" name="" value="Отправить">
    </form>






</body>

</html>