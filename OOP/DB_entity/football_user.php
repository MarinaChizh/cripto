<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="style_bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Hello, world!</title>
  </head>
  <body class="p-3 mb-2 bg-white text-dark">
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      
    </div>
    <div class="col-md-auto">

    <?php
include_once "DB_entity.php";
include_once "config.php";
$link = mysqli_connect($conf['host'], $conf['nik'], $conf['password'], $conf['bd']);
$DB = new DB_entity($link, 'football');


      
    
function show($table, $fields, $ordered_field = null, $fild_comments = null)
{
    if (is_array($table)) {

        echo "\t\n<table class='table table-dark'>";
        echo "\t\n<tr>";

        foreach ($fields as $value) {

            echo "<th><a href='?order=$value" . 
            ($ordered_field == $value ? (isset($_GET['dir']) ? "" : "&dir=desc") : "") . "'>".(empty($fild_comments[$value]) ? $value : $fild_comments[$value]) . 
            ($ordered_field == $value ? (isset($_GET['dir']) ? "⬆️" : "⬇") : "") . "</a></th>";
        }
        // echo "<th>Delete</th><th>Edit</th></tr>";



        foreach ($table as  $v) {
            echo "\t\n<tr>";
            foreach ($v as  $val) {
                echo "\t<td>$val</td>";
            }
            echo 
            // "<td><a href='?delete=$v[id]' class='delete'></a></td>" .
            //     "<td><a href='edit_football.php?id=$v[id]' class='edit'></a></td>" .
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
</div>
    <div class="col col-lg-2">
      
    </div>
  <!-- <form name="" method="post" action="">  -->
  <!-- <div class="form-group"> -->
    <!-- <?php 
    // foreach (array_diff($DB->get_fields(), ['id']) as $value) {
        // echo "\t<label for='" . $value . "'>$value</label><br><input type='text' name='" . $value . "' id='" . $value . "'><br>\n";
    // }
    ?>
    <input type="submit" name="" value="Отправить"></form><br> -->
    




    <?php
    if (!empty($_POST)) {
        $DB->add(array_intersect_key($_POST, array_flip($DB->get_fields())));
    }

    ?>


    <?php
    // $DB->order_by_asc($_GET['order']);
    // isset($_GET['delete']) ? $DB->delete($_GET['delete']) : "";
    // $DB->page_count();

    // $DB->set_page_size(($conf['page_size']));

    // if (isset($_GET['page'])&&($_GET['page']<=($DB->page_count()-1)&&($_GET['page']>=0))) {
    //     $DB->set_page($_GET['page']);

    // } else {
    //     $DB->set_page(0);
    //     $_GET['page']=0;
    // }
                                                                                                                
    // $pages='<nav aria-label="Page navigation example"><ul class="pagination"> <a class="page-link" href="?page='.($_GET['page'] > 0 ? ($_GET["page"]-1 ) : $_GET["page"]=0).'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>';
      
      

//     for ($i = 0; $i < $DB->page_count(); $i++) {
//         $pages .= "<li class='page-item". ($_GET['page'] == $i ? " active" : "") ."'><a class='page-link' href='?page=$i" . (isset($_GET['order']) ? "&order=$_GET[order]" : '') . (isset($_GET['dir']) ? "&dir=$_GET[dir]" : '') . "'>". ($i + 1) ."</a></li>";
//     }
//    $pages .='<a class="page-link" href="?page='.($_GET['page'] < ($DB->page_count()-1) ? ($_GET["page"]+1) : ($DB->page_count()-1)).'" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></ul></nav>';

//     echo "<nav aria-label='Page navigation example'><ul class='pagination'>$pages</ul></nav>";
//     $DB->get_sql();
    // print_r(($DB->get_comments()));
    show($DB->query(), $DB->get_fields(), $_GET['order'], $DB->get_comments());
    
    // echo $pages;














?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>