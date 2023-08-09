<?php
    $n = readline();
    $a = array();
    $sum = 0;

    for($x = 0; $x < $n; $x++)
    {
       $a[$x] = readline();
       $sum += $a[$x];
    }
    echo sprintf("%.1f",max($a))."\n";
    echo sprintf("%.1f",min($a))."\n";
    echo sprintf("%.f",$sum/$n);
    
?>