<?php
//function countNumb($numbers,$value){
//    $count = 0 ;
//    for ($i =0;$i < count($numbers); ++$i){
//        if ($numbers[$i] === $value){
//            $count++ ;
//        }
//    }return $count;
//}
$arr = array(1,2,3,2,3,2,4,5);
echo "<pre>";
print_r(array_count_values($arr));
