<?php
function selectionSort($arr) {

    for ($i = 0; $i < count($arr)-1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j]<$arr[$min]){
                $min = $j;
            }
        }
        $arr = swap_positions($arr,$i,$min);
    }
    return $arr;

}

function swap_positions($arr1,$left,$right){
    $temp = $arr1[$right];
    $arr1[$right] = $arr1[$left];
    $arr1[$left] = $temp;
    return $arr1;
}

echo "<pre>";
print_r(selectionSort([1, 9, 4.5, 6.6, 5.7, -4.5]));
echo "</pre>";
