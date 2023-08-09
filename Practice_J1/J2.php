<?php
    $n = array();
    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline(); 
    }
    rsort($n);
    for($x = 0; $x < 10; $x++)
    {
        if($x == 0)
        {
            echo "[".$n[$x].", " ;
        }
        else if($x == count($n)-1)
        {
            echo $n[$x]."]" ;
        }
        else
        {
            echo $n[$x].", " ;
        }
    }
?>