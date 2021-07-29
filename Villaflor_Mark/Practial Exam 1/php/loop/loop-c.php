<?php

//For Loop

function displayFibonacciSequence($max) {
    $arr = [0, 1];

    //Create a fibonacci sequence
    for ($ctr = 1; $ctr < $max; $ctr++) {
        //In fibonacci sequence we add the current number to the previous number
        
        array_push($arr, $arr[$ctr] + $arr[$ctr - 1]); //Adds the new number to the array
    }

    //Display fibonacci sequence
    for ($ctr = 0; $ctr < $max; $ctr++) {
        echo "$arr[$ctr] ";
    }
}

$max = 10;  //numbers to be displayed

displayFibonacciSequence($max);