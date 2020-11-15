<?php

include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable{

    public function __construct($radius, $name)
    {
        parent::__construct($radius, $name);
    }
    public function compareTo($circleTwo)
    {
        // TODO: Implement compareTo() method.
        $circleTwoRadius = $circleTwo->getRadius();

        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        }  else if($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
