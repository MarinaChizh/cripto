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

    function show($table, $fields, $ordered_field = null)
    {
        if (is_array($table)) {

            echo "\t\n<table style='border:1px solid black'>";
            echo "\t\n<tr>";

            foreach ($fields as $value) {

                echo "<th style='border:1px solid black'><a href='?order=$value'>$value" . ($ordered_field == $value ? " ⬆️" : "") . "</a></th>";
            }
            echo "<td>Delete</td></tr>";


            foreach ($table as  $v) {
                echo "\t\n<tr>";
                foreach ($v as  $val) {
                    echo "\t<td style='border:1px solid black'>$val</td>";
                }

                echo "<td style='border:1px solid black'><a href='?delete=$v[id]')>Удалить</a></td></tr>";
            }

            echo '</table><hr>';
        }
    }




    // $DB->reset_defaut_select();
    // if (isset($_POST['FIO'])) {
    //     $DB->add_where_condition("FIO LIKE '%" . $_POST['FIO'] . "%'");
    // }
    // if (isset($_POST['CITY'])) {
    //     $DB->add_where_condition("CITY LIKE '%" . $_POST['CITY'] . "%'");
    // }



    // print_r( $DB->get_fields());
    // $DB->order_by_asc($_POST['order']);
    // $fields[0]=$DB->get_fields();
    // $resul_table = array_merge($fields, $DB->query());
    // show($resul_table);
    // $DB->order_by_asc($_GET['order']);
    // $DB->delete($_GET['delete']);
    // show($DB->query(), $DB->get_fields(), $_GET['order']);
    echo "<pre>" . $DB->get_sql() . "</pre>";
    // echo show($DB->query());
    // print_r ($DB->error_list);

    ?>
    <form name="" method="post" action="">
        <?php
        foreach (array_diff($DB->get_fields(), ['id']) as $value) {
            echo "\t<label for='" . $value . "'>$value<label><br><input type='text' name='" . $value . "' id='" . $value . "'><br><br>\n";
        }
        ?>
        <input type="submit" name="" value="Отправить">


        <?php
        if (!empty($_POST)) {
            $DB->add(array_intersect_key($_POST, array_flip($DB->get_fields())));
        }
        // $DB->order_by_asc($_GET['order']);
        // echo $DB->add($_POST);
        // $DB->set_page_size(2);
        // $DB->set_page(1);
        // show($DB->query(), $DB->get_fields(), $_GET['order']);
        // $DB->show($DB->query(), $DB->get_fields());
        // $DB->delete_all_rows();
        isset($_GET['delete']) ? $DB->delete($_GET['delete']) : "";
        echo $DB->row_count();
        $DB->update(67, ['FIO' => 'hgfjhjdh']);
        ?>
    </form>

    <?php
    show($DB->query(), $DB->get_fields());
    echo $DB->page_count();
    if (isset($_GET['page'])) {
        $DB->set_page($_GET['page']);
    }
    $DB->page_count();

    for ($i = 0; $i < $DB->page_count(); $i++) {
        echo "<a href='?page=$i'>" . ($i + 1) . " |</a>";
    }
    ?>


</body>

</html>