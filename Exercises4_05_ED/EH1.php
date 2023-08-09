<?php
    $sum = 500;
    $i = 0;
    $year = 0;

    while(true)
    {
        if($i <= 12)
        {
            $sum += 500 * (3/100);
            echo $sum."<br/>";
            if($sum >= 20000)
            {
                echo $year;
                break;
            }
            else
            {
                $i++;
            }
        }
        else
        {
            $year += 1 ;
            echo "year = ".$year."<br/>";
            $i = 0;
            $i++;
        }
    }
    
?>