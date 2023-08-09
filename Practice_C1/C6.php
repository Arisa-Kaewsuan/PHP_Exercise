<?php
    for($x = 1; $x <= 10; $x++)
    {
        for($i = 10; $i > $x; $i--)
        {
            echo "-";
        }
        for($j = 0; $j < ($x*2)-1; $j++)
        {
            echo "x";
        }
        echo "\n";
    }
?>