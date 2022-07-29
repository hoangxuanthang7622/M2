<?php
$dem = 0;
for ($i = 2; $i < 100; $i ++){
    for($j = 1; $j <= $i; $j ++){
        if ( $i % $j == 0){
            $dem ++;
        }
    }
    if($dem == 2){
        echo $i . "<br>";
    }
    $dem = 0;
}
?>