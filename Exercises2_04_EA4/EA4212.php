<?php
    $w = readline();

    if($w >= 0 && $w <=1)
    {
        echo 50;
    }
    else if($w >= 1.1 && $w <=2)
    {
        echo 60;
    }
    else if($w >= 2.1 && $w <=3)
    {
        echo 70;
    }
    else if($w > 3)
    {
        echo 100;
    }
?>