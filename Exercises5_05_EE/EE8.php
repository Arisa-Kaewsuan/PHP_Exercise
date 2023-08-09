<?php
    $m = readline();
    $n = readline();

    if($m > $n)
    {
        for($x = $m; $x >= $n; $x --)
        {
            if($x == $n)
            {
                echo $x;
            }
            else{
                
                echo $x.",";
            }
        }
    }
?>