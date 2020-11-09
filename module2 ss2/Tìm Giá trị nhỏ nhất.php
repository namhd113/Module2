<?php

function minArray($arr) {
    $min = $arr[0];
    $arrLength = count($arr);

    for ($i=0;$i< $arrLength;$i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}

echo minArray([2,-1,5,10,9,0]);