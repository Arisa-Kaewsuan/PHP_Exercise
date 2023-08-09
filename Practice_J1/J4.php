<?php
    $n = array();
    $count = 0;
    $mode_number = 0;
    $mode_count = 0;

    for($x = 0; $x < 10; $x++)
    {
        $n[$x] = readline(); 
    }
    
    for($x = 0; $x < count($n); $x++)
    {
        for($i = 0; $i < count($n); $i++)
        {
            if($n[$x] == $n[$i])
            {
                $count += 1;
            }
        }
        if($count > $mode_count)
        {
            $mode_count = $count;
            $mode_number = $n[$x];
        }
        $count = 0;
    }
    echo $mode_number."\n";
    echo $mode_count;
?>