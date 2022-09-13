<?php
$Discount_Amount = '';
$Discount_Price = '';
$List_Price = '';
$Discount_Percent = '';
$mota = '';
if ( $_SERVER['REQUEST_METHOD'] == 'POST'){

$List_Price = $_POST['gia_niem_yet'];
$Discount_Percent = $_POST['ty_le'];
$mota = $_POST['mota'];

$Discount_Amount = $List_Price * $Discount_Percent * 0.01 ;
echo "sản phẩm $mota" . "<br>";
echo "số tiền được giảm ". $Discount_Amount ."<br>" ;
echo "số tiền phải trả " .( $List_Price - $Discount_Amount) ;
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
<label for="lname">Mô tả:</label><br>
  <input type="text" id="lname" name="mota"><br><br>
  <label for="lname">List Price:</label><br>
  <input type="text" id="lname" name="gia_niem_yet"><br><br>
  <label for="lname">Discount Percent:</label><br>
  <input type="text" id="lname" name="ty_le" ><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>