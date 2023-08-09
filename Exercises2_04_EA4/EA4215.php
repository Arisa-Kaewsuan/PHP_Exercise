<?php
    $a = readline();
    $b = readline();
    $c = readline();


    if($a + $b == $c)
    {
        echo "+";
    }
    else if($a - $b == $c || $b - $a == $c)
    {
        echo "-";
    }
    else if($a * $b == $c)
    {
        echo "*";
    }
    else if($a / $b == $c || $b / $a == $c)
    {
        echo "/";
    }

?>