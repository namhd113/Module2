<?php
include_once ('Shape.php');

class Rectangle extends Shape
{
    protected $width;
    protected $height;

    function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    function calculateArea(){
        return $this->height * $this->width;
    }

    function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
}

