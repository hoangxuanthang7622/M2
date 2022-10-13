<?php
function guestNumber($array, $number, $first, $last)
{
    if ($first > $last) {
        return "ERRO!!!";
    }
    $mid = (int)(($first + $last) / 2);
    if ($array[$mid] < $number) {
        echo "Số " . $array[$mid] . " đúng không? <br>";
        echo "Không, con số do tôi nghĩ ra lớn hơn con số máy tính đưa ra <br>";
        return guestNumber($array, $number, $mid + 1, $last);
    } elseif ($array[$mid] > $number) {
        echo "Số " . $array[$mid] . " đúng không? <br>";
        echo "Không, con số do tôi nghĩ ra nhỏ hơn con số máy tính đưa ra <br>";
        return guestNumber($array, $number, $first, $mid - 1);
    } else {
        echo "Số " . $array[$mid] . " đúng không? <br>";
        echo "Chính xác, đó là con số tôi đã nghĩ <br>";
    }
}
$array = range(1,50,1);
echo guestNumber($array,48,0,count($array)-1);