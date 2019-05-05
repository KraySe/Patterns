<?php


namespace AbstractFactory;

require_once 'Car.php';
require_once '../../Tools.php';

class GasolineCar extends Car
{

    /**
     * ElectricAutomobile constructor.
     * @param $colour
     * @param $power
     * @param $space
     */
    public function __construct($model, $colour, $power, $space)
    {
        parent::__construct($model, $colour, $power, $space);
    }

    /**
     * Show Automobile features
     */
    public function showFeatures()
    {
        $txt = 'Electric automobile of model: ' . $this->model .
            ', of colour : ' . $this->colour .
            ', of power : ' . $this->power .
            ', of space : ' . $this->space;
        \Tools::Instance()::println($txt);
    }

}