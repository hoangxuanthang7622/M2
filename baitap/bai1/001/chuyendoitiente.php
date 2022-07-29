<?php
$nhapso = '';
$pheptinh = '';
$ketqua = '';
if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $nhapso = $_REQUEST['nhapso'];
    $pheptinh = $_REQUEST['pheptinh'];
    $ketqua = '';
    switch ($pheptinh) {
        case "vnd":
          $ketqua= $nhapso / 23000;
          echo $ketqua .'usd';
          break;
        case "usd":
            $ketqua = $nhapso * 23000;
            echo $ketqua . 'vnd';

          break;
       
      }
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
  <label for="fname">Nhap số:</label><br>
  <input type="text" id="fname" name="nhapso" ><br>
  <select name="pheptinh" >
  <option value="vnd">đổi vnd sang usd</option>
  <option value="usd">đổi usd sang vnd</option>
  </select><br>
  

  <input type="submit" value="Submit">
 
</form> 
</body>
</html>