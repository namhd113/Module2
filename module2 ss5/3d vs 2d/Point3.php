<?php

include "Point2.php";

class Point3 extends Point2D{
    protected $z;
    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z=$z;
    }
    function getZ(){
        return $this->z;
    }
    function setZ($z){
        $this->z=$z;
    }
    public function setXYZ($x, $y,$z)
    {
        parent::setXY($x, $y); // TODO: Change the autogenerated stub
        $this->z=$z;
    }
    public function getXYZ()
    {
        return [$this->x,$this->y,$this->z];

    }
    public function toString()
    {
        echo "(".$this->x.",".$this->y.",".$this->z.")";
    }
}

