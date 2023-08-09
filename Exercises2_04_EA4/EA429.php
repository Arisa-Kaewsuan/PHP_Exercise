<?php
    $n = readline();

    if($n >= 80 && $n <= 100)
    {
        echo "A";
    }
    else if($n >= 70 && $n <= 79)
    {
        echo "B";
    }
    else if($n >= 60 && $n <= 69)
    {
        echo "C";
    }
    else if($n >= 50 && $n <= 59)
    {
        echo "D";
    }
    else
    {
        echo "F";
    }
?>