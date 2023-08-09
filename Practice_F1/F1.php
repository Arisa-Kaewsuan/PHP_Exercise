<?php
    $number = readline();
    for($x = 1; $x <= $number; $x++)
    {
        if($number % $x == 0)
        {
            echo $x."\n";
        }
    }
?>