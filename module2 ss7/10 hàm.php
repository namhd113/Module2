<?php
$nam = array(1,2,3,4);
//var_dump($nam);
array_push($nam,78);
//array_pop($nam);
//array_shift($nam);
//echo array_sum($nam)."<br>";
// array_splice($nam,2,1);
// rsort($nam);
//array_slice($nam,1,1);
foreach ($nam as $value){
    echo $value."<br>";
}
