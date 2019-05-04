<?php

include('config.php');

class PopulateService
{
    /** @var PopulateService */
    private static $_instance = null;
    /** @var array $patterns */
    public $patterns;

    /**
     * @return PopulateService
     */
    public static function Instance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }

        return self::$_instance;

    }

    public function populatePattern()
    {
        $patterns = PATTERNS_INFO;

        foreach ($patterns as $pattern) {
            $patternModel = new PatternModel();

            $patternModel->setPath($pattern['path']);
            $patternModel->setLabel($pattern['label']);
            $patternModel->setDescription($pattern['description']);

            $this->patterns [] = $patternModel;
        }
    }

    /**
     * @return array
     */
    public function getPatterns()
    {
        return $this->patterns;
    }
}