<?php
    $n = readline();
    $a = array();
    $sum = 0;

    for($x = 0; $x < $n; $x++)
    {
        $a[$x] = readline();
        $sum += $a[$x];
    }
    $avg = $sum/$n;

    echo sprintf("%.1f",min($a))."\n".sprintf("%.1f",max($a))."\n".sprintf("%.3f",$avg);
?>