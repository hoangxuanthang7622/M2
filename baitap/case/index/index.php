
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<?php include_once "../layout/header.php";
include_once "../database.php";

?>
<?php 
global $conn;
        $sql = " SELECT * FROM products JOIN categories ON products.category_id = categories.id_categories  ";  
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
?>
<body>
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Giày</th>
        <th>Loại giày </th>
        <th>Giá</th>
      </tr>
      <?php foreach($rows as $key=> $row) : ?>
    </thead>
        
    <tr>
        <td><?=$key + 1?></td>
        <td><?=$row->name_product?></td>
        <td><?=$row->name_category?></td>
        <td><?=$row->price?></td>      
    </tr>  
  <?php endforeach; ?>
</table>
</div>
</body>


      
      <?php include_once "../layout/footer.php";?>

