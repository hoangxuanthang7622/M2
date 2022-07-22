<?php
$array = [
    [7,8,9],
    [4,5,11]
];
$max = $array[0][0];

    for($i = 0; $i < count($array); $i ++){
        for($j = 0; $j < count($array[$i]); $j++){
            if($array[$i][$j] > $max){
                $max = $array[$i][$j];
            }
        }
    }
    echo "số lớn nhất trong mảng là: " . $max;
?>