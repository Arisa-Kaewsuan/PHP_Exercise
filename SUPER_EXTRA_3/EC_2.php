<?php
    $n = array();
    $count = 0;

    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
    }
    $v = readline();

    for($x = 0; $x < 10; $x++)
    {
        if($n[$x] == $v)
        {
            $count += 1;
        }
    }

    if($count > 0)
    {
        echo "V is in array";
    }
    else
    {
        echo "is not in array";
    }
?>