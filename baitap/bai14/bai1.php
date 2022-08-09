<?php
    $Pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    $hi = 'a@gmail.com';
    if(preg_match($Pattern,$hi)) {
        echo 'email hợp lệ';
    }else{
        echo 'email không hợp lệ';

    }