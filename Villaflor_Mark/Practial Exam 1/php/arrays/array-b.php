<?php

$arr = [9863, 7127, 2020, 80, 131, 55, 100];

sort($arr); //php function sort sorts the array in ascending order by default

$newArr = [];

//create new array that rounds up odd numbers
foreach($arr as $a) {
    array_push($newArr, $a % 2 ? (int)(round($a, -1))  : $a); //ternary operation, modulus division by 2 results 0 when even, 1 when odd
                                                              //php round rounds the number to its nearest tens (-1)
                                                              //if number is odd round it to its nearest tens otherwise retain value
}

//display the new array seperated with space
foreach($newArr as $a) {
    echo "$a ";
}