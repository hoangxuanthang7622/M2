<?php
  if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $string = $_POST['string'];
    $char = $_POST['char'];
    $count = 0;
    for($i = 0; $i < strlen($string); $i++){
        if($string[$i] == $char){
                $count ++;
        }
    }echo "Kí tự $char xuất hiện $count lần trong chuỗi $string";

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
    <form method="POST">
    Nhập string: <input type="text" name="string">
    Nhập char: <input type="text" name="char">
    <input type="submit" value="submit" >


    </form>
</body>
</html>