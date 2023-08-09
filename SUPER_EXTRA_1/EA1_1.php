<?php
    $m1 = readline();
    $m2 = readline();
    $R = readline();
    $G = 6.67e-11;
    
    $F = $G * (($m1*$m2)/($R*$R));

    echo $F ;
?>