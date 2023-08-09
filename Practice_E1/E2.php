<?php
    // หรม ของ 12-32 = 4 , 25-10 = 5 , 100-60 = 20
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
    echo $sum;  
?>