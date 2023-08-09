<?php
    $a = array();
    
    for($x = 0; $x < 3; $x++)
    {
        $a[$x] = readline();
    }
    sort($a);

    echo max($a)."\n".min($a)."\n";
    for($x = 0; $x < 3; $x++)
    {
        if($x == 0)
        {
            echo "[".$a[$x].", ";
        }
        else if($x == 2)
        {
            echo $a[$x]."]";
        }
        else
        {
            echo $a[$x].", ";
        }
    }

 
?>