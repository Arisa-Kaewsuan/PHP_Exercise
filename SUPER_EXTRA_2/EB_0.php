<?php
    $n = array();
    $sum = 0;
    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
        $sum += $n[$x];
    }
    echo($sum);
?>