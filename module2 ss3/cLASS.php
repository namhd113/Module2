<?php

class Person
{
    var $name;
    var $height;
    function __construct($personsName,$height)
    {
        $this->name = $personsName;
        $this->height = $height;
    }
    function setName($newName){
        $this->name = $newName;

    }
    function getName(){
        return $this->name;
    }
    function setHeight($height){
        $this->height = $height;
    }
    function getHeight(){
        return $this->height;
    }
}