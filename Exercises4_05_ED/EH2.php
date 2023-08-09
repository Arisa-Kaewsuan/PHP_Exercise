<?php
    // วิธีคิดดอกเบี้ยเงินฝากประจำ
    $dep = readline();
    $r = readline();
    $r = ($r/100);
    $sum = $dep;

    for($x = 1; $x <= 10; $x++)
    {
        $sum += $dep + ($sum*$r);
        echo $sum."\n";
    }
    //echo $sum;
?>