<?php
    $a = readline();
    $b = readline();
    $c = readline();
    $d = readline();
    $e = readline();
    $f = readline();

    $x = (($e*$d)-($b*$f)) / (($a*$d)-($b*$c));
    $y = (($a*$f)-($e*$c)) / (($a*$d)-($b*$c));

    echo $x."\n".$y;
?>