<?php
require_once "class_auto.php";
class Tesla extends Auto
{
    public $wheels = "4";
    public $charge = 100;
    public $maxCharge = 120;
    public function drive()
    {
        return "Едет едем на электротяги на \t" . $this->wheels . "\tколесах" . "\tОстаток заряда\t" . $this->fill_tank(-10);
    }
    public function fill_tank($charge)
    {
        if ($this->charge + $charge >= $this->maxCharge) {
            $this->charge = $this->maxCharge;
        } elseif ($this->charge + $charge <= 0) {
            $this->charge = 0;
        } else {
            $this->charge += $charge;
        }
        return $this->charge;
    }
}
