<?php
//sắp xếp nổi bọt
// $n = [1,3,5,7,9,2,4,6,8];
//     for($i = 0; $i < count($n) - 1 ; $i++){
//         for($j = count($n) - 1; $j > $i; $j--){
//             if($n[$j] < $n[$j - 1]){
//                 $t = $n[$j-1];
//                 $n[$j-1] = $n[$j];
//                 $n[$j] = $t;
//             }
//         }
//     }

    // echo '<pre>';
    // print_r($n);

    //sắp xếp chèn
    $arr = [1,3,5,7,9,2,4,6,8];

    for($i = 1; $i < count($arr) ; $i++){
        $j = $i - 1;
        $temp = $arr[$i];
        while($temp > $arr[$j] && $j >= 0){
            $arr[$j + 1] = $arr[$j];
            $j --;
        }
        $arr[$j + 1] = $temp;
    }
     echo '<pre>';
    print_r($arr);

//sắp xếp chọn
    // $arr = [1,3,5,7];
    // //      0 1 2 3
    // //chay tu 0 - 3
    // for($i = 0; $i < count($arr); $i ++){
    //     $min = $i; //0
    //     //chay j  tu 1 - 3
    //     for($j = $i +1; $j < count($arr); $j ++){
    //         if($arr[$j] < $arr[$min]){
    //             $min = $j;
    //         }
    //         //đổi chỗ
    //         if($min != $i){
    //             $temp = $arr[$min];
    //             $arr[$min] = $arr[$i];
    //             $arr[$i] = $temp;
    //         }
    //     }
    // }

    //    echo '<pre>';
    // print_r($arr);
    
?>
