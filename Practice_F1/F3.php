<?php
    $n = readline();
    $count = 0;
    $s = "string";
    
    if($n <= 1)
    {
        echo "is not a prime number";
    }
    else
    {
        for($i = 2; $i < $n; $i++)
        {
            if($n % $i == 0)
            {
                $count += 1;
            }
        }
        $s = $count > 0? "is not a prime number" : "is a prime number";
        echo $s;
    }

?>