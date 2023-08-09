<?php
    $code = readline();
    $code = strval($code);
    $code = substr_replace($code, '', 9, 9);
    $new_code = "978".$code."9";
    echo $new_code;
?>