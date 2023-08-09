<?php
    $n = 9;
    
    for($x = $n-5; $x >= 0; $x--)
    {
        for($i = $x; $i > 0; $i--)
        {
            echo "-";
        }
        echo "x";
        for($i = $n-(($x*2)+1); $i > 1; $i--)
        {
            echo "-";
        }
        if($x != $n-5)
        {
            echo "x";
        }
        for($i = $x; $i > 0; $i--)
        {
            echo "-";
        }
        echo "\n";
    }

    for($x = 0; $x < $n-5; $x++)
    {
        for($i = $x+1; $i > 0; $i--)
        {
            echo "-";
        }
        echo "x";
        for($i = $n-(($n-5)+($x*2)); $i > 0; $i--)
        {
            echo "-";
        }
        if($x != ($n-5)-1)
        {
            echo "x";
        }
        for($i = $x+1; $i > 0; $i--)
        {
            echo "-";
        }
        echo "\n";
    }

?>