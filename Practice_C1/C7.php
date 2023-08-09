<?php
    for($x = 1; $x <= 10; $x++)
    {
        for($i = 10; $i > $x; $i--)
        {
            echo "-";
        }
        for($j = 1; $j < $x+1; $j++)
        {
            echo $j;
        }
        for($k = $x-1; $k > 0; $k--)
        {
            echo $k;
        }
        echo "\n";
    }
?>