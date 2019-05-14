<?php
class XO
{
    public $arrray;
private $move;


    function create_array($size)
    {
        $this->array = [];
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $this->array[$i][$j] = '';
            }
        }
    }



    function __construct($size)
    {
        $this->create_array($size);
        $this->move="cross";
    }
    function show()
    {
        echo '<table class="tic_tac">';
        foreach ($this->array as $v) {
            echo '<tr>';
            foreach ($v as $val) {
                echo "<td>$val</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    function empty($i, $j)
{ 
    return $this->array[$i][$j]=='' ?true : false;
}

function matrix($i, $j){
    $size = count($this->array);
    return ($i >= $size || $j >= $size || $i < 0 || $j < 0) ? false : true;
}
    function setCross($i, $j)
    {
        if ($this->empty($i, $j)&& $this->matrix($i, $j)){
        $this->array[$i][$j] = "x";}
    }

    function setCircle($i, $j){
        
        if ($this->empty($i, $j)&& $this->matrix($i, $j)){
            $this->array[$i][$j] = "o";}
    }

    function makeMove($i, $j){
        $current = $this->player;
        $this->field[$i][$j] = $current;
        $this->player = ($current == 1) ? 2 : 1;


    }
}
