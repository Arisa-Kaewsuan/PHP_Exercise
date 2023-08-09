<?php
    $n = array();
    $mul = 1;
    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
    }
    
    for($x = 0; $x < 10; $x++)
    {
        $mul *= $n[$x];
    }
    echo $mul;
    
?>