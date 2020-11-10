<?php

class Fan {
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;

    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5;
    private $color = "blue";

    public function __construct()
    {
    }
    function getSpeed(){
        return $this->speed;
    }
    function setSpeed($speed){
        $this->speed=$speed;
    }
    function getOn() {
        return $this->on;
    }
    function setOn($on){
        $this->on=$on;
    }
    function getRadius(){
        return $this->radius;
    }
    function setRadius($radius){
        $this->radius=$radius;
    }
    function getColor(){
        return $this->color;
    }
    function setColor($color) {
        $this->color=$color;
    }

    function toString() {
        if ($this->on===true){
            echo "<br/>";
            echo $this->speed;
            echo "<br/>";
            echo $this->color;
            echo "<br/>";
            echo $this->radius;
            echo "<br/>";
            echo "fan is on";
        } else if ($this->on===false) {
            echo "<br/>";
            echo $this->color;
            echo "<br/>";
            echo $this->radius;
            echo "<br/>";
            echo "fan is on";
        }

    }
}