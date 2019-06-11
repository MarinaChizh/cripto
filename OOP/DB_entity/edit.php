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
    include_once "config.php";
    $link = mysqli_connect($conf['host'], $conf['nik'], $conf['password'], $conf['bd']);
    $DB = new DB_entity($link, 'db_entity');



    // // print_r($DB->add_where_condition("id= $_GET[id]")->get_sql());
    // print_r($DB->add_where_condition("id= $_GET[id]")->query());
    // // print_r($DB->query());
    // print_r($DB->get_row_by_id("$_GET[id]"));
?>

    <form name="" method="post" action="update.php?name=<?=$_GET['id']?>">
    <?php
    foreach ($DB->get_row_by_id($_GET['id']) as $key => $value) {
        echo $key;
        echo "<input type='text' name=$key value=$value><br><br>\n";
    }
    ?>
    <input type="submit" name="" value="Edit">
    </form>





























</body>

</html>