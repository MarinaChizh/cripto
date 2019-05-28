<?
session_start();

if (isset($_GET['new_game'])) {
    unset($_SESSION['Tic_Tac_Toe']);
}

include_once "AI.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="?new_game">Новая Игра</a>
    <?

    $obj = new AI(3);
    $obj->load_data_from_session();
    if (isset($_GET['i']) && isset($_GET['j'])) {
        if ($obj->check_winner() == '') {
            $obj->put_cross($_GET['i'], $_GET['j']);

            if ($obj->check_winner() != '') {
                echo "Выиграли: " . $obj->check_winner();
            } else {
                $obj->put_random_circle();

                if ($obj->check_winner() != '') {
                    echo "Выиграли: " . $obj->check_winner();
                }
            }
        }
    }

    $obj->show();



    $obj->save_data_to_session();

    ?>
</body>

</html>