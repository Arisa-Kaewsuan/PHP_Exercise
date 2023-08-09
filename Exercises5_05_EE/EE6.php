<?php
    $pi = array();
    $sum = 1;
    $pi[1] = $sum;

    for($x = 2; $x > 0; $x++)
    {
        if($x%2 == 0)
        {
            $sum -= 1/(($x*2)-1);
            $pi[$x] = 4*$sum;
        }
        else
        {
            $sum += 1/(($x*2)-1);
            $pi[$x] = 4*$sum;
        }
        if(abs($pi[$x]-$pi[$x-1]) < 0.000001)
        {
            echo $x;
            break;
        }
    }
?>