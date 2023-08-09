<?php
    $a = array();
    $i = 0;
    $max = 0;

    while($i < 3)
    {
        $a[$i] = readline();
        if($max < $a[$i])
        {
            $max = $a[$i];
        }
        $i++;
    }
    echo $max
?>