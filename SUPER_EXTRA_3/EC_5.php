<?php
    // $n = [1,2,3,4,5,6,7,8,9,10];
    $n = array();

    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
    }
    $v = readline();
    $v_index = readline();

    for($x = 10; $x >= $v_index; $x--)
    {
        $n[$x] = $n[$x-1];
    }
    $n[$v_index] = $v;

    for($x = 0; $x < 10; $x++)
    {
        if($x == 0)
        {
            echo "[".$n[$x].",";
        }
        else if($x == 9)
        {
            echo " ".$n[$x]."]";
        }
        else{
            echo " ".$n[$x].",";
        }
    }   
?>