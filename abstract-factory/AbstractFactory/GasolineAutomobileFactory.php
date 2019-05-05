<?php

namespace AbstractFactory;

require_once 'AutomobileFactory.php';
require_once 'Car/GasolineCar.php';
require_once 'Scooter/GasolineScooter.php';

class GasolineAutomobileFactory implements \AutomobileFactory
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
        return new GasolineCar($model, $colour, $power, $space);
    }

    /**
     * @param $model
     * @param $colour
     * @param $power
     * @return mixed
     */
    public function addScooter($model, $colour, $power)
    {
        return new GasolineScooter($model, $colour, $power);
    }
}