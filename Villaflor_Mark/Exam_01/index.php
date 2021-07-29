<?php

function isPalindrome($str) {
    $arr_str = str_split($str); //create an array from the string
    $arr_str_rev = [];

    //create an array with reverse elements
    for($i = count($arr_str) - 1; $i >= 0; $i--) {
        array_push($arr_str_rev, $arr_str[$i]);
    }

    return strtolower(str_replace(' ','',$str)) == strtolower(str_replace(' ','',implode($arr_str_rev))) ? 1 : 0; 
    //implode creates a string from array
    //str_replace remvoes the space
}

echo "Is Madam a palindrome? "  . isPalindrome("Madam") . "<br/>";
echo "Is nurses run a palindrome? "  . isPalindrome("nurses run") . "<br/>";
echo "Is Mark a palindrome? "  . isPalindrome("Mark")

?>