<?php
    $n = readline();
    $a = array();
    $r = array();

    for($x = 0; $x < $n; $x++)
    {
        $a[$x] = readline();
    }

    if($n%2 == 0)
    {
        for($x = 0; $x < $n/2; $x++)
        {
            $r[$x] = $a[$x] + $a[$n-($x+1)];
        }
        for($x = 0; $x < $n/2; $x++)
        {
            if($x == 0)
            {
                echo "[".$r[$x].",";
            }
            else if($x == count($r)-1)
            {
                echo " ".$r[$x]."]";
            }
            else{
                echo " ".$r[$x].",";
            }
        }
    }
    else
    {
        // คี่
        for($x = 0; $x < ($n+1)/2; $x++)
        {
            if($x == $n/2)
            {
                $r[$x] = $a[$x];
            }
            $r[$x] = $a[$x] + $a[$n-($x+1)];
        }
        for($x = 0; $x < ($n+1)/2; $x++)
        {
            if($x == 0)
            {
                echo "[".$r[$x].",";
            }
            else if($x == count($r)-1)
            {
                echo " ".$r[$x]."]";
            }
            else{
                echo " ".$r[$x].",";
            }
        }
    } 
?>