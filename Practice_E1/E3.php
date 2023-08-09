<?php
    // ครน ของ 12-24 = 24 , 18-32 = 288 , 10-15 = 30
    $a = readline();
    $b = readline();
    $sum = 1;
    $main_min = $a < $b? $a : $b;
    $min = $a < $b? $a : $b;

    for($x = 1; $x <= $main_min; $x++)
    {
        for($i = 2; $i <= $min; $i++)
        {
            if($a%$i == 0 && $b%$i == 0)
            {
                $a = $a/$i;
                $b = $b/$i;
                $sum *= $i;
                $min = $a < $b? $a : $b;
                break;
            }
        }
    }
    echo $sum*$a*$b;  
?>