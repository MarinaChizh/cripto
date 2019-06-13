<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style_proect.css" rel="stylesheet">
    <title>Document</title>

</head>

<body>
    <?php
    include_once "DB_entity.php";
    include_once "config.php";
    // include_once "style_proect.css";
    $link = mysqli_connect($conf['host'], $conf['nik'], $conf['password'], $conf['bd']);
    $DB = new DB_entity($link, 'db_entity');


    function show($table, $fields, $ordered_field = null)
    {
        if (is_array($table)) {

            echo "\t\n<table>";
            echo "\t\n<tr>";

            foreach ($fields as $value) {

                echo "<th><a href='?order=$value" . ($ordered_field == $value ? (isset($_GET['dir']) ? "" : "&dir=desc") : "") . "'>$value" . ($ordered_field == $value ? (isset($_GET['dir']) ? "⬆️" : "⬇") : "") . "</a></th>";
            }
            echo "<th>Delete</th><th>Edit</th></tr>";



            foreach ($table as  $v) {
                echo "\t\n<tr>";
                foreach ($v as  $val) {
                    echo "\t<td>$val</td>";
                }
                echo "<td><a href='?delete=$v[id]' class='delete'></a></td>" .
                    "<td><a href='edit.php?id=$v[id]' class='edit'></a></td>" .
                    "</tr>";
            }

            echo '</table><hr>';
        }
    }

    if (isset($_GET['order'])) {
        if (isset($_GET['dir'])) {
            $DB->order_by_desc($_GET['order']);
        } else {
            $DB->order_by_asc($_GET['order']);
        }
    }






    ?>
    <form name="" method="post" action="">
        <?php
        foreach (array_diff($DB->get_fields(), ['id']) as $value) {
            echo "\t<label for='" . $value . "'>$value<label><br><input type='text' name='" . $value . "' id='" . $value . "'><br><br>\n";
        }
        ?>
        <input type="submit" name="" value="Отправить"><br><br>
        




        <?php
        if (!empty($_POST)) {
            $DB->add(array_intersect_key($_POST, array_flip($DB->get_fields())));
        }

        ?>


        <?php
        // $DB->order_by_asc($_GET['order']);
        isset($_GET['delete']) ? $DB->delete($_GET['delete']) : "";
        $DB->page_count();

        $DB->set_page_size(($conf['page_size']));
        if (isset($_GET['page'])) {
            $DB->set_page($_GET['page']);
        } else {
            $DB->set_page(0);
        }
        for ($i = 0; $i < $DB->page_count(); $i++) {
            $pages .= "<a href='?page=$i" . (isset($_GET['order']) ? "&order=$_GET[order]" : '') . (isset($_GET['dir']) ? "&dir=$_GET[dir]" : '') . "'" . ($_GET['page'] == $i ? "class='active'" : "") . ">|" . ($i + 1) . "|</a>";
        }
        echo "<div class='page'>$pages</div>";
        show($DB->query(), $DB->get_fields(), $_GET['order']);
        echo $pages;

        ?>

</body>

</html>