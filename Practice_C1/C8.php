<?php
    for($x = 1; $x <= 10; $x++)
    {
        for($i = 10; $i > $x; $i--)
        {
            echo "-";
        }
        if($x%2 == 0)
        {
            for($j = 1; $j <= ($x*2)-1; $j++)
            {
                echo $j;
            }
        }
        else
        {
            for($k = ($x*2)-1; $k > 0; $k--)
            {
                echo $k;
            }
        }
        echo "\n";
    }
?>