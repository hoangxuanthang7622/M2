<?php

$giatrituonglai = '';
$giatrihientai = '';
$laisuat = '';
$tien ='';
$sonam ='';
if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $tien = $_POST['tien'];
    $laisuat = $_POST['laisuat'];
    $sonam = $_POST['sonam'];
    $giatrihientai = $tien;
    $giatrituonglai = $giatrihientai + ($giatrihientai * $laisuat * 0.01) * $sonam;
    echo $giatrituonglai . " VND ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method = "POST">
    

  <label for="fname">Lượng tiền đầu tư ban đầu:</label><br>
  <input type="text" id="fname" name="tien"><br>
  <label for="lname">Lãi suất năm:</label><br>
  <input type="text" id="lname" name="laisuat"><br><br>
  <label for="lname">Số năm đầu tư:</label><br>
  <input type="text" id="lname" name="sonam"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>