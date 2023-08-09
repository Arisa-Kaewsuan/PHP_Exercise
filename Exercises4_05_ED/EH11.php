<?php
    $a = array();
    $x = 0;
    $sum_n = 0;
    $count_n = 0;
    $sum_p = 0;
    $count_p = 0;

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
                $count_n++;
            }
            else
            {
                $sum_p += $a[$x];
                $count_p++;
            }
        }
        $x++;
    }
    echo $sum_p/$count_p."\n";
    echo $sum_n/$count_n;
 
?>