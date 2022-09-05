<?php
 
include_once "../database.php";


$sql = "SELECT * FROM classs";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetchAll();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $bithday = $_POST['bithday'];
    $gender = $_POST['gender'];
    $thongtin = $_POST['thongtin'];
    
  
    $sql = "INSERT INTO `students` 
            (`name`,`class_id`,`bithday`,`gender`,`thongtin`) 
            VALUES 
            ('$name','$class','$bithday','$gender','$thongtin')";

            if($name == ''){
              $err['name']="không thể để trống mục này!";
          }   
          if($class == ''){
              $err['class']="không thể để trống mục này!";
          }  
          if($bithday == ''){
            $err['bithday']="không thể để trống mục này!";
          }   
          if($gender == ''){
          $err['gender']="không thể để trống mục này!";
          } 
          if($thongtin == ''){
            $err['thongtin']="không thể để trống mục này!";
            }       
          if(empty($err)){
              $sql = "INSERT INTO `students` 
                  (`name`,`class_id`,`gender`,`bithday`,`thongtin`) 
                  VALUES 
                  ('$name','$class','$gender','$bithday','$thongtin')";
    
    // echo $sql;
    
    $conn->exec($sql);
    header('location:../index/index.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<form method = 'POST'>
  
  <label for="disabledTextInput"></label><br>
  <input type="text" id="fname" class="form-control" placeholder="Tên" name="name"><br>
  <span><?php if(isset($err['name'])){echo $err['name'];}; ?></span><br>

   <label for="disabledTextInput"></label><br>
   <select name="class" class="form-control" id="">
                    <?php foreach ($rows as $row) {?>
                    <option value="<?=$row->id_class;?>"><?=$row->name_class;?></option>
                    <?php } ?>
                </select><br>
  <span><?php if(isset($err['class'])){echo $err['class'];}; ?></span><br>

  <input type="radio" name="gender" value="nam">
  <label for="html">Nam</label>
  <input type="radio"  name="gender" value="nữ">
  <label for="css">Nữ</label>
  <span><?php if(isset($err['gender'])){echo $err['gender'];}; ?></span><br>

  <label for="disabledTextInput"></label><br>
  <input type="date" id="fname" class="form-control" placeholder="Ngày sinh" name="bithday"><br>
  <span><?php if(isset($err['bithday'])){echo $err['bithday'];}; ?></span><br>

  <label for="disabledTextInput"></label><br>
  <input type="text" id="fname" class="form-control" placeholder="Thông tin" name="thongtin"><br>
  <span><?php if(isset($err['thongtin'])){echo $err['thongtin'];}; ?></span><br>


  
  <input type="submit" value="ADD">
</form>
</body>
</html>