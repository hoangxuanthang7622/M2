<?php
    $Pattern = '/^\([0-9]{2,2}\)-\([0][0-9]{9,9}\)$/';
    $string = ' (a8)-(22222222)';
    if(preg_match($Pattern,$string)){
        echo 'số điện thoại hợp lệ ' . $string;
    }else{
        echo 'số điện thoại không hợp lệ ' . $string;

    }