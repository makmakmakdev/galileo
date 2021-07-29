<?php

$arr = ['red','blue','black','red','blue','blue','red','gold'];

$arr_ct = array_count_values($arr); //php function array_count_values returns an associative array
                                    //where the key of the new array is a element from the given array ($arr)
                                    //and the value of the new array is the count of each element

//display the values seperated with space
foreach($arr_ct as $k=>$v) {
    echo $v == 1 ? "$k " : '';  //ternary operation, if the count is equal to 1 display the value, otherwise don't display
}