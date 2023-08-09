<?php
    $n = array();
    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
    }
    
    for($x = 0; $x < 10; $x++)
    {
        if($n[$x] % 2 == 0)
        {
            echo $n[$x]."\n";
        }
    }
    
?>