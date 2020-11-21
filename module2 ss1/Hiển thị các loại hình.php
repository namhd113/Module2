<?php


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 7; $j++) {
        echo "* ";
    }
    echo "<br/>";
}


for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "<br/>";
}

for ($i = 0; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "* ";
    }
    echo "<br/>";
}

for ($i = 7; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br/>";
}
