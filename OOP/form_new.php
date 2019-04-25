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

</body>

</html>
<?php
include "maket.php";

$form = new Form(["method" => "post", "action" => "php.php", "id" => "form"]);
$form->add_br();
$form->add_input(['type' => 'text', 'name' => 'login', 'placeholder' => 'login']);
$form->add_br();
$form->add_input(['type' => 'password', 'name' => 'pass', 'placeholder' => 'password']);
$form->add_br();
$form->add_textarea(["id" => "textarea"], "text");
$form->add_br();
$form->add_input(['type' => 'submit', 'name' => 'GO', "value" => "Отправить", "id" => "submit"]);
$form->add_br();

// s$form->add_button(["class" => "class", "alt" => "alt"], "button");
echo $form->show_form();
