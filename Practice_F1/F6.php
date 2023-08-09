<?php
    $count = 0;
    $n = 0;
    $x = 1;
    
    while(True)
    {
        if($n == 100)
        {
            break;
        }
        else
        {
            $x += 1;
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
                $n += 1;
            }
            $count = 0;
        }
    }
?>