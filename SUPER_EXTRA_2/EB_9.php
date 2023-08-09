<?php
    $n = 50000;
    $harmonic_sum = 1;

    for($x = 1; $x <= $n; $x++)
    {
        $harmonic_sum += 1/($x+1);
    }
    echo $harmonic_sum;
?>