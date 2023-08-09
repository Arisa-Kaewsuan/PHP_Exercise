<?php
    $a = array();
    $b = array();
    $c = array();

    for($x = 0; $x < 10; $x++)
    {
        $a[$x] = readline();
    }
    for($x = 0; $x < 10; $x++)
    {
        $b[$x] = readline();
    }
    for($i = 0; $i < 10; $i++)
    {
        $c[$i] = $a[$i];
    }
    for($i = 0; $i < 10; $i++)
    {
        $c[$i+10] = $b[$i];
    }

    for($x = 0; $x < 20; $x++)
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