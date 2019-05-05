<?php

namespace AbstractFactory;

require_once 'AutomobileFactory.php';
require_once 'Car/ElectricCar.php';
require_once 'Scooter/ElectricScooter.php';

class ElectricAutomobileFactory implements \AutomobileFactory
{
    /**
     * @param $model
     * @param $colour
     * @param $power
     * @param $space
     * @return mixed
     */
    public function addCar($model, $colour, $power, $space)
    {
        return new ElectricCar($model, $colour, $power, $space);
    }

    /**
     * @param $model
     * @param $colour
     * @param $power
     * @return mixed
     */
    public function addScooter($model, $colour, $power)
    {
        return new ElectricScooter($model, $colour, $power);
    }
}