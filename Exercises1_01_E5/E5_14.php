<?php
    $n = array();
    $sum = 0;
    for($x = 0; $x < 5; $x++)
    {
        $n[$x] = readline();
        $sum += $n[$x];
    }

    $grade = (4*$n[0] + 3*$n[1] + 2*$n[2] + 1*$n[3] + 0*$n[4]) / $sum;
    echo $grade;
?>