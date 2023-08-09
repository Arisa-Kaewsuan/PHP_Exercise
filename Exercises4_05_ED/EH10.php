<?php
    $a = array();
    $x = 0;
    $sum_n = 0;
    $sum_p = 0;

    while(true)
    {
        $a[$x] = readline();  

        if($a[$x] == 0)
        {
            break;
        }
        else
        {
            if($a[$x] < 0)
            {
                $sum_n += $a[$x];
            }
            else
            {
                $sum_p += $a[$x];
            }
        }
        $x++;
    }
    echo $sum_p."\n";
    echo $sum_n;
 
?>