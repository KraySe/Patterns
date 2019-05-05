<?php

interface AutomobileFactory
{
    /**
     * @param $model
     * @param $colour
     * @param $power
     * @param $space
     * @return mixed
     */
    public function addCar($model, $colour, $power, $space);

    /**
     * @param $model
     * @param $colour
     * @param $power
     * @return mixed
     */
    public function addScooter($model, $colour, $power);
}