<?php

//Do-while Loop

function displayOdd() {
    $ctr = 0;

    do {
        echo ($ctr % 2) ? $ctr . "<br/>" : ''; //ternary operation, modulus division by 2 results 0 when even, 1 when odd
                                               //displays $ctr when odd with newline(<br/>)

        $ctr++;          //$ctr increment by 1
    } while($ctr <= 10); //loop condition, do while loops will always run once
                         //loop will continue to run when $ctr is less than or equal to 10
}

displayOdd();