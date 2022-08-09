<?php
    $arr = ['a','b','c','d','e','f','g','h','i','j','k','l','m'];
    for($i = 0; $i < count($arr);$i ++){
        if($arr[$i] == 'j'){
            echo 'j ở vị trí thứ ' . $i;
        }
    }