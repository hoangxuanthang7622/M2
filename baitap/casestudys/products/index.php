<?php
include_once "../database.php";
global $conn;
$sql = "SELECT * FROM `products` JOIN categories
ON products.category_id = categories.id_categories
JOIN sizes
ON sizes.id = products.size_id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
include_once "../layout/header.php";


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<?php
include_once '../layout/header.php';
include_once "../database.php";
 ?>

<a  class="btn btn-primary" href="add.php">ADD</a>
<div class="container-fluid">

<table class="table">
    <tr class="thead-dark">
    <th id = "a">ID</th>
        <th>Tên sản phẩm</th>
        <th>Danh mục sản phẩm</th>
        <th>Size</th>
        <th>Ảnh</th>
        <th>Mô tả</th>
        <th>Giá</th>
        <th>Tuỳ Chỉnh</th>
     


    </tr>
    <?php foreach($rows as $key=>$value) : ?>
    <tr>
    <td><?=$key+1?></td>
        <td><?=$value->name_product?></td>
        <td><?=$value->name_category?></td>
        <td><?=$value->size?></td>
        <td><img src="<?=$value->image?>" style = "width: 100px" alt=""></td>
        <td><?=$value->desc?></td>
      
        <td><?=number_format($value->price)." VNĐ"?></td>
        <td>    
            <a class="btn btn-success" href="edit.php?id=<?=$value->id_product?>">edit</a>
            <a class="btn btn-danger" onclick=" return confirm('Bạn có chắc chắn xoá không ?') " href="delete.php?id=<?=$value->id_product?>">delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php
include_once '../layout/footer.php';