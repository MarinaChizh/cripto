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
    include_once "style_proect.css";
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
            echo "<td style='border:1px solid black'>Delete</td><td style='border:1px solid black'>Edit</td></tr>";



            foreach ($table as  $v) {
                echo "\t\n<tr>";
                foreach ($v as  $val) {
                    echo "\t<td style='border:1px solid black'>$val</td>";
                }
                echo "<td style='border:1px solid black; fond-size: 100%'><a href='?delete=$v[id]'>💀</a></td>".
                "<td style='border:1px solid black; fond-size: 100%'><a href='edit.php?id=$v[id]'>🎨</a></td>".
                "</tr>";
            }

            echo '</table><hr>';
        }
    }








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

        ?>


        <?php
        
        $DB->page_count();
        isset($_GET['delete']) ? $DB->delete($_GET['delete']) : "";
        if (isset($_GET['page'])) {
            $DB->set_page($_GET['page']);
        }
        for ($i = 0; $i < $DB->page_count(); $i++) {
            echo "<a href='?page=$i'>" . ($i + 1) . " |</a>";
        }
        // $DB->update(67, ['FIO' => 'hgfjhjdh']);
        show($DB->query(), $DB->get_fields());
        ?>
        </body>

</html>