<?php
    for($x = 10; $x >= 1; $x--)
    {
        for($i = 0; $i < $x-1; $i++)
        {
            echo "-";
        }
        for($j = $x-1; $j < 10; $j++)
        {
            echo "x";
        }
        echo "\n";
    }
?>