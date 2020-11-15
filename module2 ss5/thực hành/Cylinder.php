<?php
include_once ('Circle.php');

class Cylinder extends Circle
{
    protected $height;

    function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
}
