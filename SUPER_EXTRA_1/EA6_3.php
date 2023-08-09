<?php
    $n = 9;
    
    for($x = 0; $x < $n-5; $x++)
    {
        for($i = $x; $i > 0; $i--)
        {
            echo "-";
        }
        echo "x";
        for($i = $n-(($x*2)+2); $i > 0; $i--)
        {
            echo "-";
        }
        echo "x";
        for($i = $x; $i > 0; $i--)
        {
            echo "-";
        }
        echo "\n";
    }

    for($x = 0; $x < $n; $x++)
    {
        if($x == 4)
        {
            echo "x";
        }
        else{
            echo "-";
        }
    }
    echo "\n";

    for($x = $n-5; $x > 0; $x--)
    {
        for($i = $x-1; $i > 0; $i--)
        {
            echo "-";
        }
        echo "x";
        for($i = $n-($x*2); $i > 0; $i--)
        {
            echo "-";
        }
        echo "x";
        for($i = $x-1; $i > 0; $i--)
        {
            echo "-";
        }
        echo "\n";
    }

?>