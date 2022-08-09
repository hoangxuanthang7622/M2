<?php
    $Pattern = '/^[_a-z0-9]{6,}$/';
    $a = '______';
    if (preg_match($Pattern,$a)){
        echo 'mẫu account hợp lệ'; //
    }else{
        echo 'mẫu account không hợp lệ';

    }