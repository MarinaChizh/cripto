<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style_table.css">
</head>

<body>

</body>

</html>
<?php
class Table
{

    public $table;
    

    function __construct($table)
    {
        $this->table = $table;
    }
    function showTable()
    {
        echo "<table>\n";
        foreach ($this->table as $v) {
            echo "<tr>\n";
            foreach ($v as $val) {
                echo "\t<td>$val</td>\n";
            }
            echo "</tr>\n";
        }
        echo "</table><hr>\n";
    }

    

    public function sort($key)
    {
        usort($this->table, function ($a, $b) use ($key) {
            return $a[$key] <=> $b[$key];
        });
    }

function del_col($key){
foreach ($this->table as $k => $v){
    unset($this->table[$k][$key]);
}
}
public function add(&$arr, $el, $key){
    array_splice($arr, $key, 0, $el);
}

function add_col($var, $key){
foreach($this->table as $k => &$v){
    $this->add($v, $var[$k], $key);
}
}


}
$obj = new Table([
    ['№', 'фио', 'должность'],
    ['1', 'Иванов', 'дворник'],
    ['2', 'Петров', "бухгалтер"]
]);
echo $obj->showTable();
echo $obj->sort(2);
echo $obj->showTable();
echo $obj->add_col(['телефон', 123212, 12321212], 2);
echo $obj->showTable();
echo $obj->del_col(2);
echo $obj->showTable();


