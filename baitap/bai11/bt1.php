<?php
    $numbers = [1,3,5,7,9,2,4,6,8,9,9,9];
    $value = 9;
    $count = 0;
    foreach($numbers as $key => $number){
        if($number == $value){
            $count ++;
        }
        
    }
    echo 'phần tử ' . $value . ' xuất hiện ' . $count . ' lần'  ;
    