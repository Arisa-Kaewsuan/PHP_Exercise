<?php
    $a = readline();
    $b = readline();
    $c = readline();


    if($a == $b)
    {
        echo "a = b";
    }
    else if($a == $c )
    {
        echo "a = c";
    }
    else if($b == $c)
    {
        echo "b = c";
    }
    else 
    {
        echo "a != b != c";
    }

?>