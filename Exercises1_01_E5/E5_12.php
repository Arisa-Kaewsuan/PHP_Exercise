<?php
    $a = 0;
    $b = 1;
    $c = 2;
    $x = 0;
    $y = 1;
    $z = 2;

    $x = $a-- + ++$b + $c++ + ++$y / $z++;

    echo $a."\n";
    echo $b."\n";
    echo $c."\n";
    echo sprintf("%.1f", $x)."\n";
    echo sprintf("%.1f", $y)."\n";
    echo sprintf("%.1f", $z);
?>