<?php
    function highestPowerof2($n)
    {
        // Invalid input
        if ($n < 1)
            return 0;
     
        $res = 1;
     
        // Try all powers starting
        // from 2^1
        for ($i = 0; $i < 8 * PHP_INT_SIZE; $i++)
        {
            $curr = 1 << $i;
     
            // If current power is
            // more than n, break
            if ($curr > $n)
            break;
     
            $res = $curr;
        }
     
        return $res;
    }
     
    // Driver code
    $n = readline();
    echo highestPowerof2($n);
?>