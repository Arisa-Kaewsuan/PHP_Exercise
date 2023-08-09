<?php
    $a = array();
    $sum = 0;

    for($x = 0; $x < 5; $x++)
    {
        $a[$x] = readline();  
        $sum += $a[$x];   
    }
    echo $sum."\n";
    echo $sum/5;
 
?>