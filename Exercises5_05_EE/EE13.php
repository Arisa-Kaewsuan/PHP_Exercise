<?php
    $n = readline();
    $a = array();
    $sum = 0;
    $tsum = 0;
    $count = 0;
    $avg = array();

    for($x = 0; $x < $n*5; $x++)
    {
        if($count < 5)
        {
            $a[$x] = readline();
            $sum += $a[$x];
            $count++;
        }
        else
        {
            array_push($avg,$sum/5);
            $count = 0;
            $sum = 0;
            $a[$x] = readline();
            $sum += $a[$x];
            $count++;
        }
        $tsum += $a[$x];
    }
    $tavg = $tsum/$n;

    // for($x = 0; $x < $n; $x++)
    // {
    //     echo sprintf("%.1f",$avg[$x])."\n";
    // }
    echo sprintf("%.1f",$avg[0])."\n";
    echo sprintf("%.1f",$tavg);
    
?>