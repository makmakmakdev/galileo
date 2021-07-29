<?php

function isPerfectSquare($num) {
    //check if number is a perfect square
    return round(sqrt($num)) * round(sqrt($num)) == $num ? 1 : 0;
}

function isFibonacci($num) {
    $pos = 5 * ($num * $num) + 4;
    $neg = 5 * ($num * $num) - 4;

    if (isPerfectSquare($pos) || isPerfectSquare($neg)) {
        return 1;
    } else {
        return 0;
    }
}

for($i = 1; $i <= 10; $i++) {
    if (isFibonacci($i)) {
        echo "$i is a Fibonacci Number";
    } else {
        echo "$i is not Fibonacci Number";
    }
    echo "<br/>";
}

?>