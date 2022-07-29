<?php
    function month($thang){
    switch ($thang) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 10:
        case 12:
        echo   "31 ngày";          
            break;    
        case 4:
        case 6:
        case 8:
        case 9:
        case 11:
        echo "30 ngày";
             break;
        case 2:
        echo "28 ngày";
            break;
        default:
        echo "tháng bạn nhập không có";
             break;
    }
}
month(1);
echo "<br>";
month(3);
echo "<br>";
month(2);
echo "<br>";
month(13);