<?php
class Point
{
    protected $x;
    protected $y;

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function getX()
    {
        return $this->x;
    }

    function setX($x)
    {
        $this->x = $x;
    }

    function getY()
    {
        return $this->y;
    }

    function setY($y)
    {
        $this->y = $y;
    }

    function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function getXY()
    {

        return [$this->x, $this->y];
    }
    public function toString()
    {

        echo "(".$this->x.",".$this->y.")";
    }
}

