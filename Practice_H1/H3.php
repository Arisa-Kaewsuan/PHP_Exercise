<?php
    $n = array();
    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
    }
    
    for($x = 9; $x >= 0; $x--)
    {
        echo $n[$x]."\n";
    }
    
?>