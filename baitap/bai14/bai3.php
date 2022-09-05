<?php
    $Pattern = '/^[CAP][0-9]{4,4}[GHIKLM]$/';
    $string = 'P0323A';
    if(preg_match($Pattern,$string)){
        echo 'tên lớp hợp lệ ' . $string;
    }else{
        echo 'tên lớp không hợp lệ ' . $string;

    }
 