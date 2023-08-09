<?php
    $n = array();
    $count = 0;
    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
    }
    
    for($x = 0; $x < 10; $x++)
    {
        if($n[$x] % 2 == 0)
        {
            $count += 1;
        }
    }
    echo $count;
    
?>