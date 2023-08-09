<?php
    $a = array();
    $odd = array();
    $even = array();
    
    for($x = 0; $x < 10; $x++)
    {
        $a[$x] = readline();

        if($a[$x]%2 == 0)
        {
            array_push($even,$a[$x]);
        }
        else
        {
            array_push($odd,$a[$x]);
        }
    }

    echo max($odd)."\n".min($odd)."\n".max($even)."\n".min($even);

 
?>