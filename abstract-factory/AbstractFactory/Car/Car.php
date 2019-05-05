<?php

namespace AbstractFactory;

Abstract class Car
{
    /** @var string $model */
    protected $model;
    /** @var string $colour */
    protected $colour;
    /** @var int $power */
    protected $power;
    /** @var double $space */
    protected $space;

    /**
     * Automobile constructor.
     * @param $model
     * @param $colour
     * @param $power
     * @param $space
     */
    public function __construct($model, $colour, $power, $space)
    {
        $this->model = $model;
        $this->colour = $colour;
        $this->power = $power;
        $this->space = $space;
    }

    /**
     * Show Automobile features
     */
    public abstract function showFeatures();
}