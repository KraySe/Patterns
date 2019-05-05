<?php


namespace AbstractFactory;


class GasolineScooter extends Scooter
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