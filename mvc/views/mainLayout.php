<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content='IE=edge'>
    <title><?= $title ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <ul class="menu">
        <li>
            <a href="?t=site&a=showtable">Table</a>
        </li>
        <li>
            <a href="?t=site&a=showaddform">addform</a>
        </li>
        <li>
            <a href="?t=site&a=about">22</a>
        </li>
        <li>
            <a href="">33</a>
        </li>
    </ul>
    <div id="maincontent">
        <?php $this->body(); ?>
    </div>
</body>

</html>