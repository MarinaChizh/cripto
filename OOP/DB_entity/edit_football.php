<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
    include_once "DB_entity.php";
    include_once "config.php";
    $link = mysqli_connect($conf['host'], $conf['nik'], $conf['password'], $conf['bd']);
    $DB = new DB_entity($link, 'football');



    // // print_r($DB->add_where_condition("id= $_GET[id]")->get_sql());
    // print_r($DB->add_where_condition("id= $_GET[id]")->query());
    // // print_r($DB->query());
    // print_r($DB->get_row_by_id("$_GET[id]"));
?>

    <form name="" method="post" action="update_football.php?name=<?=$_GET['id']?>">
    <?php
    foreach ($DB->get_row_by_id($_GET['id']) as $key => $value) {
        echo $key;
        echo "<input class='bg-primary text-white' type='text' name=$key value=$value><br><br>\n";
    }
    ?>
    <input type="submit" class="btn btn-danger btn-lg" name="" value="Edit">
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

