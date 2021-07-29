<?php
    function dateDiff($date1, $date2) {
        $d1 = date_create($date1);
        $d2 = date_create($date2);
        $diff = date_diff($d1, $d2); //date_diff gets the difference of two dates returns an object
                                     //y is year
                                     //m is month
                                     //d is day

        echo $diff->y > 0 ? $diff->y . (($diff->y == 1) ? ' year' : ' years') : '';
        echo ' ';
        echo $diff->m > 0 ? $diff->m . (($diff->m == 1) ? ' month' : ' months') : '';
        echo ' ';
        echo $diff->d > 0 ? $diff->d . (($diff->d == 1) ? ' day' : ' days') : '';
    }

    dateDiff("2019-05-31", "2018-04-05");
?>