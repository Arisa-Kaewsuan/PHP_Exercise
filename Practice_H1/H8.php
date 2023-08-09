<?php
    $n = array();
    $sum = 0;
    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
    }
    
    for($x = 0; $x < 10; $x++)
    {
        $sum += $n[$x];
    }
    echo $sum/10;
    
?>