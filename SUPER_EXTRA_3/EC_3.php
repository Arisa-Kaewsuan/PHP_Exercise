<?php
    $n = array();
    $max = 0;
    $max_index = 0;

    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
        if($n[$x] > $max)
        {
            $max = $n[$x];
            $max_index = $x;
        }
    }
    echo $max."\n";
    echo $max_index;

    
?>