<?php
 include_once "./../layout/header.php";
 
include_once "../database.php";
$sql = "SELECT * FROM categories";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetchAll();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name_product = $_POST['name'];
    $category_id = $_POST['category'];
    // print_r($_POST['category']);
    // die();
    $price = $_POST['price'];
    // $err = [];
    if($name_product == ''){
        $err['name']="không thể để trống mục này!";
    }   
    if($price == ''){
        $err['price']="không thể để trống mục này!";
    }   
    if(empty($err)){
        $sql = "INSERT INTO `products` 
            (`name_product`,`category_id`,`price`) 
            VALUES 
            ('$name_product','$category_id',$price)";
    
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<form method = 'POST'>
  
  <label for="fname">Tên</label><br>
  <input type="text" id="fname" name="name" placeholder="Tên Giày"><br>
  <span><?php if(isset($err['name'])){echo $err['name'];}; ?></span><br>
  <label for="fname">Danh mục sản phẩm</label><br>
  <select name="category" class="form-control" id="">
                    <?php foreach ($rows as $row) {?>
                    <option value="<?=$row->id_categories;?>"><?=$row->name_category;?></option>
                    <?php } ?>
                </select><br>
  <label for="fname">Giá</label><br>
  <input type="number" id="fname" name="price" placeholder="Giá tiền"><br>
  <span ><?php if(isset($err['price'])){echo $err['price'];}; ?></span><br>
  <input type="submit" value="Thêm">
</form>
</body>
</html>