<?php


namespace AbstractFactory;

require_once 'Scooter.php';
require_once '../../Tools.php';

class ElectricScooter extends Scooter
{

    /**
     * show Scooter features
     */
    public function showFeatures()
    {
        $txt = 'Electric automobile of model: ' . $this->model .
            ', of colour : ' . $this->colour .
            ', of power : ' . $this->power ;
        \Tools::Instance()::println($txt);
    }
}