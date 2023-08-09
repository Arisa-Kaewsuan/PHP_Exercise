<?php
    $count = 0;
    
    for($x = 2; $x < 100; $x++)
    {
        for($i = 2; $i <= $x; $i++)
        {
            if($x % $i == 0)
            {
                $count += 1;
            }
        }
        if($count == 1)
        {
            echo $x."\n";
        }
        $count = 0;
    }
?>