<?php
require_once "class_auto.php";
class Mustang extends Auto
{
    public $wheels = "6";
    public $tank = 300;
    public $maxTank = 120;
    public function drive()
    {
        return "Едет на бензине на \t" . $this->wheels . "\tколес". "\tОстаток заряда\t" . $this->fill_tank(-10);
    }

    public function fill_tank($tank)
    {
        if ($this->tank + $tank >= $this->maxTank) {
            $this->tank = $this->maxTank;
        } elseif ($this->tank + $tank <= 0) {
            $this->tank = 0;
        } else {
            $this->tank += $tank;
        }
        return $this->tank;
    }
}
