<?php
function insertionSort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        $temp = $list[$i];
        $j = $i - 1;
        while ($j >= 0 && $list[$j] < $temp) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $temp;
    }
    return $list;
}

$list = [1, 3, 0, -1, 5, 7, 9];
echo "Original Array :\n";
echo implode(', ', $list);
echo "<br>";
echo "\nSorted Array :\n";
echo "<pre>";
var_dump(insertionSort($list)); 