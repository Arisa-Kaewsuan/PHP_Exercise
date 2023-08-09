<?php
    $n = 5;
    for($x = 1; $x <= $n; $x++)
    {
        for($i = $n; $i > $x; $i--)
        {
            echo "-";
        }
        for($i = ($x*2)-1; $i >= 1; $i--)
        {
            echo "x";
        }
        echo "\n";
    }
?>