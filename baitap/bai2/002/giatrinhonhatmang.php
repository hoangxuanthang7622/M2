<?php
// $songuyen = [1,2,3,4,5,1,6,7,8];
// $min = $songuyen[0];
// $index1 =0;
// foreach ($songuyen as $key => $value) {
//     if ($value < $min){
//         $min = $value;
//         $index1 = $key;
//     }
    
// }
// echo "số nhỏ nhất trong mảng là: " . $min;
// echo "<br>";
// echo "tại vị trí: " . $index1;



$songuyen1 = [3,4,7,9,4,2];
$min1 = $songuyen1[0];
for($i = 1; $i < count($songuyen1); $i ++){
        if($songuyen1[$i] < $min1){
            $min1 = $songuyen1[$i];
        }
}
echo $min1;

?>