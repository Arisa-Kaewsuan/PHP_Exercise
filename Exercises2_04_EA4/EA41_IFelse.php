<?php
    $a = readline();
    $b = readline();
    $c = readline();

    if($a > 13)
    {
        if($b != 6)
        {
            echo "A";
        }
        else
        {
            if($c <= 7)
            {
                echo "B";
            }
            else
            {
                echo "C";
            }
        }
    }
    else
    {
        if($b <= 16)
        {
            echo "D";
        }
        else
        {
            if($c > 6)
            {
                echo "E";
            }
            else{
                echo "F";
            }
        }
    }
?>