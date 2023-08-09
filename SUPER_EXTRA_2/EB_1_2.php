<?php
    $n = readline();
    $data = array();
    $sum = 0;

    for($x = 0; $x < $n; $x++)
    {
        $data[$x] = readline();
        $sum += $data[$x];
    }
    echo $sum/$n ."\n";
    echo min($data)."\n";
    echo max($data)."\n";
?>