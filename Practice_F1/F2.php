<?php
    $number = readline();
    $count = 0;
    for($x = 1; $x <= $number; $x++)
    {
        if($number % $x == 0)
        {
            $count += 1;
        }
    }
    echo $count;
?>