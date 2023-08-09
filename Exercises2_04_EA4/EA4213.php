<?php
    $a = readline();
    
    if($a > 3)
    {
        echo "please select only 1-3";
    }
    else
    {
        $b = readline();
        $c = readline();

        switch ($a) 
        {
            case 1:
                echo $b + $c;
                break;
            case 2:
                echo $b * $c;
                break;
            case 3:
                echo $b / $c;
                break;
        }
    }
?>