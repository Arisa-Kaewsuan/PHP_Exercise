<?php
    $n = 5;
    for($x = $n; $x >= 1; $x--)
    {
        for($i = $n-$x; $i > 0; $i--)
        {
            echo "-";
        }
        for($i = ($x*2)-1; $i > 0; $i--)
        {
            echo "x";
        }
        echo "\n";
    }
?>