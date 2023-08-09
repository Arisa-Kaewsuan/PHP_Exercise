<?php
    $n = array();
    $i = 0;
    $sum = 0;
    $count = 0;

    while(true)
    {
        $n[$i] = readline();
        
        if($n[$i] != -1)
        {
            $sum += $n[$i];
            $count += 1;
        }

        if($n[$i] < 0)
        {
            echo "ERROR"."\n";
        }

        if($n[$i] == 0)
        {
            if($count == 1)
            {
                echo "NO AVERAGE";
            }
            else
            {
                echo $sum/($count);
            }
            break;
        }

        $i += 1;
    }