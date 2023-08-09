<?php
    $A = readline();
    $B = readline();
    $C = readline();
    $m = readline();

    if($m > 5)
    {
        $Y = ($A * $m * 2) + ($B * $m) + $C;
    }
    else if($m == 5)
    {
        $Y = ($A * $m * 2) + ($B * $m) - $C;
    }
    else if($m < 5)
    {
        $Y = ($A * $m * 2) + ($B * $m);
    }

    echo $Y;
?>