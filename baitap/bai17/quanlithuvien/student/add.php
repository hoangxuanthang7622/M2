<?php
 include_once "./../layout1/header.php";
 
include_once "../database.php";
$sql = "SELECT * FROM students";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetchAll();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    
  
    $sql = "INSERT INTO `students` 
            (`name`,`address`,`class`,`phone`) 
            VALUES 
            ('$name','$address','$class','$phone')";

            if($name == ''){
              $err['name']="không thể để trống mục này!";
          }   
          if($address == ''){
              $err['address']="không thể để trống mục này!";
          }  
          if($class == ''){
            $err['class']="không thể để trống mục này!";
          }   
          if($phone == ''){
          $err['phone']="không thể để trống mục này!";
          }    
          if(empty($err)){
              $sql = "INSERT INTO `students` 
                  (`name`,`address`,`class`,`phone`) 
                  VALUES 
                  ('$name','$address','$class','$phone')";
    
    // echo $sql;
    
    $conn->exec($sql);
    header('location:index.php');
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
<form method = 'POST'>
  
  <label for="disabledTextInput"></label><br>
  <input type="text" id="fname" class="form-control" placeholder="Tên" name="name"><br>
  <span><?php if(isset($err['name'])){echo $err['name'];}; ?></span><br>

   <label for="disabledTextInput"></label><br>
  <input type="text" id="fname" class="form-control" placeholder="Lớp" name="address"><br>
  <span><?php if(isset($err['address'])){echo $err['address'];}; ?></span><br>

  <label for="disabledTextInput"></label><br>
  <input type="text" id="fname" class="form-control" placeholder="Địa chỉ" name="class"><br>
  <span><?php if(isset($err['class'])){echo $err['class'];}; ?></span><br>

  <label for="disabledTextInput"></label><br>
  <input type="text" id="fname" class="form-control" placeholder="Số điện thoại" name="phone"><br>
  <span><?php if(isset($err['phone'])){echo $err['phone'];}; ?></span><br>

  
  <input type="submit" value="ADD">
</form>
</body>
</html>