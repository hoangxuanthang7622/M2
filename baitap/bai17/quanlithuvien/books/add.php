<?php
 include_once "./../layout1/header.php";
 
include_once "../database.php";
$sql = "SELECT * FROM categories";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetchAll();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Name = $_POST['name'];
    $category_id = $_POST['category'];
    // print_r($_POST['category']);
    // die();
    $price = $_POST['price'];
    // $err = [];
    if($Name == ''){
        $err['name']="không thể để trống mục này!";
    }   
    if($price == ''){
        $err['price']="không thể để trống mục này!";
    }   
    if(empty($err)){
        $sql = "INSERT INTO `books` 
            (`name`,`category_id`,`price`) 
            VALUES 
            ('$Name','$category_id',$price)";
    
    // echo $sql;
    // die();
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
  
  <label for="fname">Tên</label><br>
  <input type="text" id="fname" name="name" placeholder="Tên sách"><br>
  <span><?php if(isset($err['name'])){echo $err['name'];}; ?></span><br>
  <label for="fname">Danh mục sản phẩm</label><br>
  <select name="category" class="form-control" id="">
                    <?php foreach ($rows as $row) {?>
                    <option value="<?=$row->id;?>"><?=$row->name_category;?></option>
                    <?php } ?>
                </select><br>
  <label for="fname">Giá</label><br>
  <input type="number" id="fname" name="price" placeholder="Giá tiền"><br>
  <span ><?php if(isset($err['price'])){echo $err['price'];}; ?></span><br>
  <input type="submit" class="btn btn-primary" value="ADD">
  
  <a href="index.php" class="btn btn-danger">cancel</a>

</form>
</body>
</html>