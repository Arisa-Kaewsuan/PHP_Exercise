<?php
    for($x = 1; $x <= 1000; $x++)
    {
        if(($x%3 == 0 && $x%5 == 0 && $x%7 !== 0) || ($x%3 == 0 && $x%7 == 0 && $x%5 !== 0) || ($x%5 == 0 && $x%7 == 0 && $x%3 !== 0))
        {
            echo $x."\n";
        }
    }
?>