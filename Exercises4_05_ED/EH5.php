<?php
    $sum = 0;
    $i = 0;

    while(true)
    {
        $n = readline();
        if($n != 0)
        {
            $sum += $n;
            $i++;
        }
        else if($n == 0)
        {
            break;
        }
    }
    echo $sum."\n";
    echo $sum/$i;
?>