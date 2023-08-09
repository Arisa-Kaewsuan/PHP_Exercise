<?php
    $m = readline();
    $n = readline();

    if($m >= $n)
    {
        for($x = $n; $x <= $m; $x ++)
        {
            if($x == $m)
            {
                echo $x;
            }
            else{
                
                echo $x.",";
            }
        }
    }
?>