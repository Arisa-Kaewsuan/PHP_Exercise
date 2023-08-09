<?php
    $n = array();
    $count = 0;

    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
        if($n[$x] >= 10)
        {
            $count += 1;
        }
    }
    echo $count;
?>