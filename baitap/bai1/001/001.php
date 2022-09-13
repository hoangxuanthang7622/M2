<?php 

$age=18;
if($age>=18){
    echo "duoc uong bia";
}
echo "<br>";
/////bai 3
$age = 18;
$money = true;
if($age >= 18 && $money == true){
    echo "duoc uong bia";
}
echo "<br>";
/////bai 4
$money = true;
$age = 18;
if($age >= 18 || $money == true){
    echo "duoc uong bia";
}
echo "<br>";
////bai5
$age = 17;
if (!($age >= 18) ) {
    echo "ban phai uong nuoc ngot";
}
echo "<br>";
///bai6 & 7
$money = true;
$quan_mo = true;
$cho_no = true;
if ($quan_mo){
    if($money == true || $cho_no == true){
        echo "ban duoc nhau";
    }else {
        echo  "ban phai ve nha";
    }
}
echo "<br>";
///bai 9
$day = 5;
if ($day >= 2 && $day <= 6){
    echo "di lam";
}else if ($day == 7){
    echo "di sinh hoat CLB";
}else {
    echo "relax";
}
echo "<br>";
//bai 11
$month = 1;
switch ($month) {
    case 1:      
            echo "31 ngay";
            break;        
    case 2:
            echo "28 ngay";
            break;
    default:
             echo "30 ngay";
             break;   
}
echo "<br>";
///bai 12
$day = 3;
switch ($day){
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
      echo "di lam";
      break;
    case 7:
        echo "sinh hoat CLB";
        break;
    default:
        echo "relax";
        break;
}
echo "<br>";
///bai 13
$age = 17;
echo ($age >= 18) ? "duoc uong bia" : "duoc uong ruou";
echo "<br>";
///bai 15
    for ($i = 0; $i <= 5; $i ++){
        echo $i;
    }
echo "<br>";
///bai 16
    for ($i = 1; $i <= 10; $i++){
        echo "5 x " . $i . " = " . ($i * 5) . "<br>";
    }
echo "<br>";    
///bai 17  
     for ($i = 100; $i > 0; $i -- ){
         if ( $i % 2 == 0){
             echo $i;
         }
     }
echo "<br>";
///bai 18       
for ($i = 100; $i > 0; $i -- ){
    if ( $i % 2 !== 0){
        echo $i;
    }
}
echo "<br>";
///bai 19
$tong = 0;
    for($i = 1; $i <= 10; $i++){
        $tong = $tong + $i;
    }
    echo $tong;
echo "<br>";
///bai 20
$a = 1;
while ($a <= 5){
  echo $a . "<br>";
    $a++;
}
echo "<br>";
///bao 21
$a = 10;
while ($a >= 1){
  echo $a . "<br>";
    $a--;
}
echo "<br>";
///bai 22
$b = 0;
do {
    echo $b;
    $b ++;
}while ($b <= 5);
echo "<br>";
//bai 23
$c = 10;
do {
    echo $c;
    $c --;
}while ($c >= 5 && $c <= 10);
echo "<br>";
///bai 24
    for ($i = 1; $i <= 10; $i++){
        echo $i;
        if( $i == 5){
            
            break;
        }
    }
    echo "<br>";
//bai 25
    for ($i = 1; $i <= 5; $i ++){
        
        if ( $i == 3){
            continue;
        }echo $i;
    }
    echo "<br>";
//bai 26
    for ($i = 1; $i <= 10; $i ++){
        if ($i % 2 !== 0){
            continue;
            
        }echo $i;
    }
    echo "<br>";
//bai 27
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
         td,tr {
             border: 1px solid #ccc;
           width: 50px;
         }
   </style>
 </head>
 <body>
    <?php
   echo "<table>";
for ($i = 1; $i <= 8; $i ++){
    echo "<tr>";
   for($j = 1; $j <= 3; $j ++){
    echo "<td>" . $i . $j. "</td>";
   }
   echo "</tr>";
}
echo "</table>";
 ?>

</body>
</html>
<br>











   