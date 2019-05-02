<?php
abstract class Auto{
    abstract function drive();
    
    public function fill_tank($tank)
    {
        if ($this->tank + $tank >= $this->maxtank) {
            $this->tank = $this->maxtank;
        } elseif ($this->tank + $tank <= 0) {
            $this->tank = 0;
        } else {
            $this->tank += $tank;
        }
        return $this->tank;
    }
 }
