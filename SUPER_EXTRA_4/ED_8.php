<?php
    function primeCheck($n)
    {
        for($x = 2; $x < $n; $x++)
        {
            if($n % $x == 0)
            {
                return 1;
            }
        }
        return 0;
    }

    $n = readline();
    echo primeCheck($n);
?>