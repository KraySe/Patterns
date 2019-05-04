<?php

include('PopulateService.php');

class PatternModel
{
    /** @var string $path */
    protected $path;
    /** @var string $label */
    protected $label;
    /** @var string $description */
    protected $description;

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getInfoPatterns()
    {
        /**
         * Populate pattern data by config
         */
        PopulateService::Instance()->populatePattern();
        /**
         * output patterns populated
         */
        return PopulateService::Instance()->getPatterns();
    }
}