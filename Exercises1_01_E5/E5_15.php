<?php
    $w = readline();
    $h = readline();

    $Mosteller = sqrt(($w*$h)/3600.0);
    $Dubois = (71.84 * pow($w,0.425) * pow($h,0.725))/(10000);
    $Boyd = 0.0003207 * pow($h,0.3) * pow((1000 * $w),(0.7285-(0.0188* (3 + log10($w)))));

    echo $Mosteller."\n";
    echo $Dubois."\n";
    echo $Boyd;
?>