<?php
    $n = array();
    $max = 0;
    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
    }
    
    for($x = 0; $x < 10; $x++)
    {
        if($n[$x] > $max)
        {
            $max = $n[$x];
        }
    }
    echo $max;
    
?>