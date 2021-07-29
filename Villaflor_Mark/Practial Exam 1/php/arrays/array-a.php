<?php

$arr = ['Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian']; //initialize the array

$arr_ct = array_count_values($arr); //php function array_count_values returns an associative array
                                    //where the key of the new array is a element from the given array ($arr)
                                    //and the value of the new array is the count of each element

$max = 0;

//get the highest count of an element
foreach($arr_ct as $v) {
    $max = $v > $max ? $v : $max; //ternary operation, if value is greater than max set new max to current value, otherwise retain max
}

$mostNumberOccurence = []; //initialize an empty array

foreach($arr_ct as $k=>$v) {
    if($v == $max) array_push($mostNumberOccurence, $k); //add the key ($k) to the array if its value ($v) is equal to the highest count ($max)
}

sort($mostNumberOccurence); //php function sort sorts the array in ascending order by default

//display the value(s) seperated with space
foreach($mostNumberOccurence as $m) {
    echo "$m ";
}