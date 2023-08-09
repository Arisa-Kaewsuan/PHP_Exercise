<?php
    $a = readline();
    $b = readline();
    $c = readline();

    $case = $c;

    switch ($case) 
    {
        case 1:
            echo $a + $b;
            break;
        case 2:
            echo $a - $b;
            break;
        case 3:
            echo $a * $b;
            break;
        case 4:
            echo $a / $b;
            break;
        default:
            echo "ERROR !";
    }
?>