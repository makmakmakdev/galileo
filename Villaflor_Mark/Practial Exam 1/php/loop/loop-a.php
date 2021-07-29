<?php

//While Loop

function sumEven() {
    $ctr = 0; //initialize $ctr to 0
    $sum = 0; //initialize $sum to 0

    while($ctr <= 10) {                     //loop condition, loop will run only when $ctr is less than or equal to 10
        $sum += ($ctr % 2 == 0) ? $ctr : 0; //ternary operation, modulus division by 2 results 0 when even, 1 when odd
                                            //adds the $ctr to $sum when even, adds 0 to $sum when odd

        $ctr++;                             //$ctr increment by 1
    }

    return $sum;                            //return value
}

echo sumEven();