<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../otsiv_style.css">
</head>

<body>

  <form action="" method="GET">
    <select name="select_order">

      <?php
      include("config.php");
      $fields_list = ['name', 'tel', 'email', 'otziv', 'mark', 'time'];
      $fields_list_description = ['ФИО', 'телефон', 'email', 'отзыв', 'оценка', 'дата отзыва'];
      foreach ($fields_list as $key => $value) {
        echo '<option value"' . $key . '" ' . ($_GET['select_order'] == $key ? 'selected"selected"' : '') . '>' . $fields_list_description[$key] . '</option>';
      }
      ?>

    </select>
    <input type="submit">
  </form>

  <?php


      // получаем номер страницы
      if (isset($_GET['page'])) $page = ($_GET['page'] - 1);
      else $page = 0;

      // Первый оператор для LIMIT
      $start = $page * $per_page;
      $start1 = $fields_list[$_GET['select_order']];

      // Запрос

      //  $res = mysqli_query($mysqli, "SELECT * FROM `table1` ORDER BY $start1 LIMIT  $start, $per_page ");

       $res=mysqli_query($mysqli, "SELECT * FROM `table1` ORDER BY `name` LIMIT $start, $per_page");

      // Вывод записи
      while ($row = mysqli_fetch_array($res)) {
        ?>
        <div class="comment">
          <div> Имя: <?= $row['name'] ?></div>
                <div> Телефон: <?= $row["tel"] ?></div>
                    <div> Email: <?= $row["email"] ?></div>
                    <div> Отзыв: <?= $row["otziv"] ?></div>
                    <div> Оценка: <?= $row["mark"] ?></div>
                    <div> Время: <?= $row["time"] ?></div>
                    </div>
                                    <?php
                  }
                  // $mysqli->close();

                  // Ссылки на страницы:
                  $row = mysqli_fetch_row(mysqli_query($mysqli, "SELECT count(*) FROM `table1`"));
                  $total_rows = $row[0];

                  $num_pages = ceil($total_rows / $per_page);
                  $pagination = '';
                  for ($i = 1; $i <= $num_pages; $i++) {
                    $pagination .= "<a href='?page=$i&select_order=" . $_GET['select_order'] . "' " . ($_GET['page'] == $i ?: '') . ">$i</a>";
                  }
                  echo $pagination;



                  // for($i=1;$i<=$num_pages;$i++) {
                  //   if ($i-1 == $page) {
                  //     echo $i." ";
                  //   } else {
                  //     echo '<a class="ss" href="'.$_GET['admin.php'].'?page='.$i.'">'.$i."</a> ";
                  //   }
                  // }

                  // mysqli_close();
                  ?>
</body>

</html>