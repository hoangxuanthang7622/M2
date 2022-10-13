<?php
    $songuyen = [2,4,6];
    $songuyen1 = [3,5,7];
    $songuyen2 = [];
    for($i = 0; $i < count($songuyen); $i++){
        array_push($songuyen2,$songuyen[$i]);
    }
    for($j = 0 ; $j < count($songuyen1); $j++){
        array_push($songuyen2,$songuyen1[$j]);
    }
    echo '<pre>';
    print_r($songuyen2);
    echo '</pre>';