<?php
    $max = 0;
    $count = 0;
    $x =2;
    
    while(true)
    {
        for($i = 2; $i < $x; $i++)
        {
            if($x % $i == 0)
            {
                $count++;
                break;
            }
        }
        if($count == 0)
        {
            if($max < $x && $max < 10000000)
            {
                $max = $x;
            }
        }
        $count =0;
        $x++;
    }
    echo $max;
    
?>