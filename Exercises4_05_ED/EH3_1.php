<?php
    $n = readline();
    strval($n);
    $sum = 0;

    for($x = 0; $x < strlen($n); $x++)
    {
        $sum += $n[$x];
    }
    echo $sum;

?>