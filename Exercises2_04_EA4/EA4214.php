<?php
    $a = readline();
    $b = readline();
    $c = readline();

    if(($a + $b > $c) && ($a + $c > $b) && ($c + $b > $a))
    {
        echo "triangle";
    }
    else{
        echo "not triangle";
    }
?>