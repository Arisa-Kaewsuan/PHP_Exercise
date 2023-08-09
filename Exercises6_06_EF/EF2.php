<?php
    $A = array();
    $i = 0;

    for($a = 1; $a < 500; $a++)
    {   
        for($b = 1; $b < 500; $b++)
        {
            if(in_array($b,$A))
            {
                continue;
            }
            else
            {
                for($c = 1; $c < 500; $c++)
                {
                    if(pow($a,2) + pow($b,2) == pow($c,2))
                    {
                        $A[$i] = $a; 
                        $i++;
            
                        echo $a.", ".$b.", ".$c."\n";
                    }
                }
            }
        }
    }
?>