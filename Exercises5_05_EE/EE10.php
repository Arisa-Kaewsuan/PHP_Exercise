<?php
    $n = array();
    $sum = 0;

    for($x = 0; $x < 10; $x++)
    {
       $n[$x] = readline();
       $sum += $n[$x];
    }
    $avg = $sum/10;
    echo sprintf("%.1f",max($n))."\n";
    echo sprintf("%.1f",min($n))."\n";
    echo sprintf("%.1f",$avg);
    
?>