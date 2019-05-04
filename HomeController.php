<?php

include('PatternModel.php');

class HomeController
{
    public function indexAction()
    {
        $patternModel = new PatternModel();
        $data = $patternModel->getInfoPatterns();

        return $data;
    }

}