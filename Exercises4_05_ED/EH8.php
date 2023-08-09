<?php
    $a = array();

    for($x = 0; $x < 10; $x++)
    {
        $a[$x] = readline();     
    }
    sort($a);
    echo $a[8];
 
?>