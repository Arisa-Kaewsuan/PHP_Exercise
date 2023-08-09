<?php
    $tsale = array();
    $i = 0;

    while(true)
    {
        $tsale[$i] = readline(); 

        if($tsale[$i] == -1)
        {
            echo "exit";
            break;
        }
        else
        {
            if($tsale[$i] < 10000)
            {
                echo sprintf("%.1f",0)."\n";
            }
            else if($tsale[$i] >= 10000 && $tsale[$i] < 25000)
            {
                $com = $tsale[$i] * (7/100);
                echo sprintf("%.1f",$com)."\n";
            }
            else if($tsale[$i] >= 25000)
            {
                $com = $tsale[$i] * (10/100);
                echo sprintf("%.1f",$com)."\n";
            }
        }

        $i++;
    }
?>