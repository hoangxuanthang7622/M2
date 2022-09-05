
<?php
 include_once "./../layout/header.php";
 
include_once "../database.php";
$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetchAll();

$sql1 = "SELECT * FROM 	categories";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows1 = $stmt1->fetchAll();

$sql2 = "SELECT * FROM orders_products	";
$stmt2 = $conn->query($sql2);
$stmt2->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows2 = $stmt2->fetchAll();
 
$sql3 = "SELECT * FROM clients";
$stmt3 = $conn->query($sql3);
$stmt3->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows3 = $stmt3->fetchAll();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $id_client = $_REQUEST['client'];
    $category = $_POST['category'];
    $products = $_POST['products'];
    $order_day = $_POST['order_day'];
    $quantity = $_POST['quantity'];
    $sql = "INSERT INTO `orders_products` 
            (`client_id`, `order_day`) 
            VALUES 
            ('$id_client','$order_day')";     
    $conn->exec($sql);

    $sql2 = "SELECT * FROM orders_products WHERE client_id = $id_client	";
    $stmt2 = $conn->query($sql2);
    $stmt2->setFetchMode(PDO::FETCH_OBJ);
    //fetch se tra ve du lieu 1 ket qua
    $rows2 = $stmt2->fetch();
    $rows2->id;

    $sql = "SELECT * FROM products WHERE id_product =  $products";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetch se tra ve du lieu 1 ket qua
    $rows = $stmt->fetch();
    $rows->id_product;
    $total = ($quantity * $rows->price );

    $sql = "INSERT INTO `orders_detail` 
    (`order_product_id`,`product_id`,`quantity`,`total_price`) 
    VALUES 
    ($rows2->id, $rows->id_product,$quantity, $total)";     
$conn->exec($sql);
    header('location:index.php');
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
  
  <label for="fname"></label>Khách hàng<br>
  <select class="form-control" name="client" id="">
      <?php
        foreach ($rows3 as $key => $item):
      ?>
     <option value="<?=$item->id_client?>"><?=$item->name_client?></option>
    <?php endforeach; ?>
    </select><br>
    
    <label for="fname"></label>Loại Giày<br>
  <select class="form-control" name="category" id="">
      <?php
        foreach ($rows1 as $key => $item):
      ?>
     <option value="<?=$item->id?>"><?=$item->name_category?></option>
    <?php endforeach; ?>
    </select><br>

    <label for="fname"></label>Giày<br>
  <select class="form-control" name="products" id="">
      <?php
        foreach ($rows as $key => $item):
      ?>
     <option value="<?=$item->id_product?>"><?=$item->name_product?></option>
    <?php endforeach; ?>
    </select><br>
   
 

  <label for="fname">Ngày đặt hàng</label><br>
  <input type="date" id="fname" class="form-control" name="order_day"><br>
  <label for="fname">Số lượng</label><br>
  <input type="number" id="fname" class="form-control" name="quantity"><br>
 
  
  <input type="submit" value="ADD">
</form>
</body>
</html>