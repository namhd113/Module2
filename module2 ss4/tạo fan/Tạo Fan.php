<?php


include "fan.php";

$fan1 = new Fan();
$fan1->setSpeed("FAST");
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setOn(true);
$fan1->toString();

$fan2 = new Fan();
$fan2->setSpeed("MEDIUM");
$fan2->setRadius(5);
$fan2->setColor("blue");
$fan2->setOn(false);
$fan2->toString();