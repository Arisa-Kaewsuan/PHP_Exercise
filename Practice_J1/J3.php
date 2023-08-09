<?php
    $n = array();
    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline(); 
    }
    sort($n);
    $med = ($n[4] + $n[5])/2;
    echo($med);
?>