

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = 'POST'>
  <label for="fname">TENHANG</label><br>
  <input type="text" id="fname" name="tenhang"><br>
  <label for="lname">MACONGTY</label><br>
  <input type="text" id="lname" name="macongty"><br><br>
  <label for="lname">MALOAIHANG</label><br>
  <input type="text" id="lname" name="maloaihang"><br><br>
  <label for="lname">SOLUONG</label><br>
  <input type="text" id="lname" name="soluong"><br><br>
  <label for="lname">DONVITINH</label><br>
  <input type="text" id="lname" name="donvitinh"><br><br>
  <label for="lname">GIAHANG</label><br>
  <input type="text" id="lname" name="giahang"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>

<?php

include_once 'db.php';


 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $TENHANG = $_POST['tenhang'];
    $MACONGTY = $_POST['macongty'];
    $MALOAIHANG = $_POST['maloaihang'];
    $SOLUONG = $_POST['soluong'];
    $DONVITINH = $_POST['donvitinh'];
    $GIAHANG = $_POST['giahang'];
    $sql = "INSERT INTO `c10_mat_hang` 
            (`TENHANG`, `MACONGTY`, `MALOAIHANG`, `SOLUONG`, `DONVITINH`, `GIAHANG`) 
            VALUES 
            ('$TENHANG', $MACONGTY, $MALOAIHANG, $SOLUONG, '$DONVITINH', $GIAHANG)";
    
    // echo $sql;
    
    $conn->exec($sql);
    header('location:index.php');
}
   




?>
