<?php
    $find = 23;
    $numbers = [2,5,8,12,16,23,38,56,72,91];
    //         0 1 2  3  4  5  6  7  8  9
    $L = 0;
   $R = count($numbers)-1;
   while($L <= $R){
    $M = floor(($L + $R)/2);//4
    //$numbers[$M] = 16
    if($numbers[$M]> $find){
        $R = $M - 1;
    }elseif($numbers[$M]<$find){
        $L = $M + 1;
    }else{
        echo 'Tìm ra '.$find.'Tại vị trí '.$M;
        break;
    }
}
    die();
   

    /*
    R = 9
    L = 5
    */
    // $M = floor(($L + $R) / 2); //7
    // // number[$M] = 56
    // if($numbers[$M] > $find){
    //     $R = $M - 1;// 6
    // }else if($numbers[$M] < $find){
    //     $L = $M + 1; //
    // }



    // /*
    // R = 38
    // L = 5
    // */

    // $M = floor(($L + $R) / 2); //5
    // // number[$M] = 23
    // if($numbers[$M] > $find){
    //     $R = $M - 1;// 6
    // }else if($numbers[$M] < $find){
    //     $L = $M + 1; //
    // }