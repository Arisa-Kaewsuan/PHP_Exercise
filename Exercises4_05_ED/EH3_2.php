<?php
    $n = readline();
    strval($n);
    $count_even = 0;
    $count_odd = 0;

    for($x = 0; $x < strlen($n); $x++)
    {
        if($n[$x] % 2 == 0)
        {
            $count_even++;
        }
        else
        {
            $count_odd++;
        }
    }
    echo $count_even."\n";
    echo $count_odd;

?>