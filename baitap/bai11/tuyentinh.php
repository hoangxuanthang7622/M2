<?php
    $number = [1,4,6,8,3,7];
    $find = 8;
    foreach ($number as $key => $value){
        if($value == $find){
            echo 'tìm thấy ' . $find . 'tại vị trí' . $key;
        }
    }