<?php


function total($arr) {
    $sum = 0;
    for ($x = 0;$x <= count($arr); $x++){
        $sum += $x;
    }
    return $sum;
}

function tt($a,$b){
    $arr = array(1,3,2,5,4);

    if ($a == 1){

        echo total($arr);
    }
}
