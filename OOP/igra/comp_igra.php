<?php
require_once "Tic_Tac_Toe_Para.php";
class Igra extends Tic_Tac_Toe
{


function random(){
    return random_int(0, ($size-1));
}

    function put_cross()
    {
        $size = count($this->array);
      
        if ($this->in_matrix($i, $j) && $this->is_empty($i, $j) && $this->check_move('cross')) {
            $this->array[$i][$j] = 'X';
            $this->turn_move();
        }
    }
    function put_circle()
    {
        function put_cross()
        {
            $size = count($this->array);
            $i = round(rand(0, ($size - 1)));
            $j = round(rand(0, ($size - 1)));
            if ($this->in_matrix($i, $j) && $this->is_empty($i, $j) && $this->check_move('circle')) {
                $this->array[$i][$j] = 'O';
                $this->turn_move();
            }
        }
    }
}
