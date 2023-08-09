<?php
    // $n = [1,2,3,4,5,6,7,8,9,10];
    $n = array();

    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline();
    }
    $v = readline();

    for($x = 0; $x < 10; $x++)
    {
        if($n[$x] == $v)
        {
            for($i = $x; $i < 10; $i++)
            {
                $n[$i] = $n[$i+1];
            }
            $n[9] = 0;
            break;
        }
    }

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