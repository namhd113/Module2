<?php

include_once ('Shape.php');

class Circle extends Shape
{
    protected $radius;

    function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}