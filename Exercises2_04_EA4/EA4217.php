<?php
    $n = 9;
    for($x = 0; $x < $n-5; $x ++)
    {
        for($i = 0; $i < ($x*2)+1; $i++)
        {
            echo "*";
        }
        for($i = 0; $i < 4*(4-$x); $i++)
        {
            echo "-";
        }
        for($i = 0; $i < ($x*2)+1; $i++)
        {
            echo "*";
        }
        echo "\n";
    }

    for($i = 0; $i < $n*2; $i++)
    {
        echo "*";
    }
    echo "\n";

    for($x = $n-5; $x > 0; $x--)
    {
        for($i = $x+($x-1); $i > 0; $i--)
        {
            echo "*";
        }
        for($i = $x + (5*(4-$x)); $i > 0; $i--)
        {
            echo "-";
        }
        for($i = $x+($x-1); $i > 0; $i--)
        {
            echo "*";
        }
        echo "\n";
    }
?>



