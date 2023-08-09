<?php
    function firstDigit($n)
    {
        $n = $n . "";
        for($x = 0; $x < strlen($n); $x++)
        {
            if($n[$x] == 0)
            {
                continue;
            }
            else
            {
                return $n[$x];
            }
        }
    }

    $n = readline();
    echo firstDigit($n);
?>