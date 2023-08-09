<?php
    for($x = 1; $x <= 11; $x++)
    {
        if($x == 1)
        {
            for($i = 0; $i <= 9; $i++)
            {
                if($i == 0)
                {
                    echo "*|";
                }
                else
                {
                    echo "\t".$i;
                }
            }
            echo "\n";
        }
        else if($x == 2)
        {
            for($i = 1; $i <= 77; $i++)
            {
                echo "-";
            }
            echo "\n";
        }
        else
        {
            for($i = 0; $i <= 9; $i++)
            {
                if($i == 0)
                {
                    echo $x-2 ."|";
                }
                else
                {
                    echo "\t".($x-2)*$i;
                }
            }
            echo "\n";
        }
    }
?>