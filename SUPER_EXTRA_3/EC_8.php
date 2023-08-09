<?php
    $a = [1,2,1,3,8,5,4,6,8,4,2,5,6,1,2,1,0,0,1,0];
    $k = [-1,0,1];
    $c = array();

    for($x = 0; $x < count($a)-2; $x++)
    {
        $sum = 0;
        for($i = 0; $i < count($k); $i++)
        {
            $sum += $a[$x+$i] * $k[$i];
        }
        $c[$x] = $sum;
    }

    for($x = 0; $x < count($a)-2; $x++)
    {
        if($x == 0)
        {
            echo "[".$c[$x].",";
        }
        else if($x == 19)
        {
            echo " ".$c[$x]."]";
        }
        else{
            echo " ".$c[$x].",";
        }
    }   
?>