<?php


namespace AbstractFactory;


Abstract class Scooter
{
    /** @var string $model */
    protected $model;
    /** @var string $colour */
    protected $colour;
    /** @var int $power */
    protected $power;

    /**
     * Scooter constructor.
     * @param $model
     * @param $colour
     * @param $power
     */
    public function __construct($model, $colour, $power)
    {
        $this->model = $model;
        $this->colour = $colour;
        $this->power = $power;
    }

    /**
     * show Scooter features
     */
    public abstract function showFeatures();
}