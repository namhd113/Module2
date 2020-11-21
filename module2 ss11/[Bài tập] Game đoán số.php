<html lang="en">
<meta charset="UTF-8">
<body>
<form method="post" action="">
<input type="text" name="inputNumber" placeholder="InputNumber"><br>
<button type="submit">Submit</button>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $inputNumber = $_POST['inputNumber'];
    $array = [];
    for ($i = 0;$i <100;++$i){
        array_push($array,$i);
    }

    if (binarySearch($array,$inputNumber)){
        echo "done";
    }
}
function binarySearch(array $numbers,  $needle) {
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = (int) (($low + $high) / 2);

        if ($numbers[$mid] > $needle) {
            $high = $mid - 1;
        } else if ($numbers[$mid] < $needle) {
            $low = $mid + 1;
        } else {
            return TRUE;
        }
    }
    return FALSE;
}
