<html>
<head>

</head>
<body>

<form method="post">
    <input type="type" name="numberInput">
    <button type="submit">Đọc Số</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numberInput = $_POST["numberInput"];


    function oneNumber($one)
    {
//        global $numberInput;
        switch ($one) {
            case (1):
                echo "One";
                break;
            case (2):
                echo "Two";
                break;
            case (3):
                echo "Three";
                break;
            case (4):
                echo "Four";
                break;
            case (5):
                echo "Five";
                break;
            case (6):
                echo "Six";
                break;
            case (7):
                echo "Seven";
                break;
            case (8):
                echo "Eight";
                break;
            case (9):
                echo "Nice";
                break;
        }
    }

    function twoNumber($two)
    {
//global $numberInput;
        switch ($two) {
            case (10):
                echo "Ten";
                break;
            case (11):
                echo "Eleven";
                break;
            case (12):
                echo "Twelve";
                break;
            case (13):
                echo "Thirteen";
                break;
            case (14):
                echo "Fourteen";
                break;
            case (15):
                echo "Fifteen";
                break;
            case (16):
                echo "Sixteen";
                break;
            case (17):
                echo "Seventeen";
                break;
            case (18):
                echo "Eighteen";
                break;
            case (19):
                echo "Nineteen";
                break;
        }
    }
    function hundred($hundred){
        oneNumber($hundred);
        echo " hundred ";
    }

    function number($three)
    {
        switch ($three) {
            case (2):
                echo "Twenty";
                break;
            case (3):
                echo "Thirty";
                break;
            case (4):
                echo "Forty";
                break;
            case (5):
                echo "Fifty";
                break;
            case (6):
                echo "Sixty";
                break;
            case (7):
                echo "Seventy";
                break;
            case (8):
                echo "Eighty";
                break;
            case (9):
                echo "Ninety";
                break;

        }
    }

}

if ( $numberInput ==0) {
    echo "Zero";
} else if ($numberInput>0 && $numberInput<10) {
    oneNumber($numberInput);
} else if ($numberInput>=10 && $numberInput<20) {
    twoNumber($numberInput);
} else if ($numberInput>=20 && $numberInput<100) {
    $ten = $numberInput[0];
    $one = $numberInput[1];
    number($ten);
    oneNumber($one);
} else if ($numberInput>=100 && $numberInput<1000){
    $hundred = $numberInput[0];
    $ten = $numberInput[1];
    $one = $numberInput[2];
    if ($numberInput==100){
        hundred($hundred);
    } else if ($ten==1) {
        hundred($hundred);
        echo "and ";
        twoNumber($ten." ".$one);
    } else {
        hundred($hundred);
        echo "and ";
        number($ten);
        oneNumber($one);
    }
}




?>


</body>

</html>
