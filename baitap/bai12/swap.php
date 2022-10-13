<?php
$books = ['van','su','dia'];
//          0     1     2
//gán sử vào temp
$temp = $books[1];  //sử
$books[1] = $books[0];  //văn
//gán văn bằng sử
$books[0] = $temp;
echo '<pre>';
print_r($books);
echo '</pre>';
