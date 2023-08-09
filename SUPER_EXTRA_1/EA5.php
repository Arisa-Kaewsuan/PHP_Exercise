<?php
    $a = readline();
    $b = readline();
    $c = readline();
    
    if(($a+$b > $c) && ($a+$c > $b) && ($c+$b > $a))
    {
        if(pow($c,2) == pow($a,2) + pow($b,2))
        {
            echo "right triangle"."\n";
        }
        else if(pow($c,2) > pow($a,2) + pow($b,2) || pow($b,2) > pow($a,2) + pow($c,2) || pow($a,2) > pow($c,2) + pow($b,2))
        {
            echo "obtuse triangle"."\n";
        }
        else if(pow($c,2) < pow($a,2) + pow($b,2) )
        {
            echo "acute-angled triangle"."\n";
        }

        if($a == $b && $b == $c)
        {
            echo "equilateral triangle";
        }
        else if($a == $b || $c == $b || $a == $c)
        {
            echo "isosceles triangle";
        }
        else
        {
            echo "scalene triangle";
        }
    }
    else
    {
        echo "is not triangle";
    }
?>