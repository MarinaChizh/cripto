<?php
require_once "Tic_Tac_Toe_Para.php";
class Igra extends Tic_Tac_Toe
{
    // function put_circle()
    // {

    //         $size = count($this->array);
    //         $i = round(rand(0, ($size - 1)));
    //         $j = round(rand(0, ($size - 1)));
    //         if ($this->in_matrix($i, $j) && $this->is_empty($i, $j) && $this->check_move('circle')) {
    //             $this->array[$i][$j] = 'O';
    //             $this->turn_move();
    //         }

    // }

    // function put_cross()
    // {

    //         $size = count($this->array);
    //         $i = round(rand(0, ($size - 1)));
    //         $j = round(rand(0, ($size - 1)));
    //         if ($this->in_matrix($i, $j) && $this->is_empty($i, $j) && $this->check_move('cross')) {
    //             $this->array[$i][$j] = 'X';
    //             $this->turn_move();
    //         }

    // }



    function random_move($i, $j, $play)
    {
        if ($this->there_are_empty_cells()) {
            $player = $play == 'X' ? 'cross' : 'circle';
            if ($this->in_matrix($i, $j) && $this->is_empty($i, $j) && $this->check_move($player)) {
                $this->array[$i][$j] = $play;
                $this->turn_move();
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function random_put_cross()
    {
        do { } while (!$this->random_move($this->random(), $this->random(), 'X'));
    }

    function random_put_circle()
    {
        do { } while (!$this->random_move($this->random(), $this->random(), 'O'));
    }

    function random()
    {
        return random_int(0, $this->get_size() - 1);
    }

    function there_are_empty_cells()
    {
        $count = 0;
        foreach ($this->array as $value) {
            foreach ($value as $val) {
                if ($val == '') {
                    $count++;
                }
            }
        }
        return $count;
    }
}
