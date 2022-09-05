
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<?php include_once "../layout/header.php";
include_once "../database.php";

?>
<?php 
global $conn;
        $sql =" SELECT * FROM clients 
        JOIN orders_products ON clients.id_client =orders_products.client_id 
        JOIN orders_detail ON orders_products.id = orders_detail.order_product_id 
        JOIN products ON orders_detail.product_id = products.id_product 
        JOIN categories ON products.category_id = categories.id_categories"; 
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
?>
<a  class="btn btn-primary" href="add.php">Add</a>
<div class="container">
<table class= "table">
<thead class="thead-dark">
    <tr>
        <th>id</th>
        <th>Họ & tên</th>              
        <th>Giày</th>        
        <th>Loại giày</th>              
        <th>Số lượng</th>        
        <th>Tuỳ chỉnh</th>        
               
               
    </tr>
    <?php foreach($rows as $key=> $row) : ?>
    <tr>
        <td><?=$key + 1?></td>
        <td><?=$row->name_client?></td>
        <td><?=$row->name_product?></td>
        <td><?=$row->name_category?></td>
        <td><?=$row->quantity?></td>
        <td>
            <a class="btn btn-warning" href="../orders_detail/index.php?id=<?=$row->id_client?>">Show</a>
            
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include_once "../layout/footer.php";?>