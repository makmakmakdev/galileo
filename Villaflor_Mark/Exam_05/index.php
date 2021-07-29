<?php

function reverseString($str) {
    $arr_str = str_split($str); //str_split creates array from string
    $arr_str_rev = [];

    //create an array with reverse elements
    for($i = count($arr_str) - 1; $i >= 0; $i--) {
        array_push($arr_str_rev, $arr_str[$i]);
    }

    return implode($arr_str_rev); //implode creates string from array
}

echo reverseString("Car");

?>