<?php
include "MovablePoint.php";

$movablePoint = new MovablePoint(1,2,3,4);


$movablePoint->toString();
echo "<br/>";
$movablePoint->move();
$movablePoint->toString();