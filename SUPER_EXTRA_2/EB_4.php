<?php
    $a = 50000000;
    $b = 70000000;
    $count = 0;

    while(true)
    {
        if($a < $b)
        {
            $count += 1;
            $a += (3/100)*$a;
            $b += (2/100)*$b;
        }
        else
        {
            break;
        }
    }
    echo $count;
?>