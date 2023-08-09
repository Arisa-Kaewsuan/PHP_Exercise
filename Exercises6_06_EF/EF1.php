<?php
    $cost = array();
    $sum = 0;

    for($x = 0; $x < 4; $x++)
    {
        $cost[$x] = readline();
        $sum += $cost[$x];
    }

    echo $sum."\n";
    echo $sum-min($cost);
?>