<?php
    // $h = array();
    $h = [8,5,0,2,5,2,1,6,7,9,8,2,0,4,0,6,2,2,2,8,4,6,3,0,7,8,9,3,4,3,3,1,1,8,5];
    $r = array();
    $sum = 0;
    $count = 0;

    for($x = 0; $x < 35; $x++)
    {
        // $h[$x] = readline();
        if($count < 7)
        {
            $sum += $h[$x];
            $count += 1;
            echo $count;
        }
        else
        {
            array_push($r,$sum);
            $sum = 0;
            $count = 0;
            $sum += $h[$x];
            $count += 1;
        }
    }

    for($x = 0; $x < 5; $x++)
    {
        if($x == 0)
        {
            echo "[".$r[$x].",";
        }
        else if($x == 4)
        {
            echo " ".$r[$x]."]";
        }
        else{
            echo " ".$r[$x].",";
        }
    }
?>