<?php
    $n = readline();
    $mul = 1;

    for($x = 1; $x <= $n; $x++)
    {
        $mul *= $x;
    }
    echo $mul;
?>