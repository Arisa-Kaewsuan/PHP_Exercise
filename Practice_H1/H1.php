<?php
    $n = array();
    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
    }
    $count = 0;
    for($x = 0; $x < 10; $x++)
    {
        if($n[$x] % 2 == 0)
        {
            echo "have";
            $count += 1;
            break;
        }
    }
    if($count == 0)
    {
        echo "don't have";
    }
    
?>