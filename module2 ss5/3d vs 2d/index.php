<?php
include "Point3.php";


$point3 = new Point3(3,4,5);
$point3->setXYZ(5,6,7);
print_r($point3->getXYZ());