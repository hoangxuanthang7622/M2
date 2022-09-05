

<?php
 include_once "./../layout/header.php";
 
include_once "../database.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $category = $_POST['category'];
  
    $sql = "INSERT INTO `categories` 
            (`name_category`) 
            VALUES 
            ('$category')";
    
    // echo $sql;
    
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
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<form method = 'POST'>
  <label for="fname">Tên Danh mục sản phẩm</label><br>
  <input type="text" id="fname" class="form-control" name="category"><br>
  <input type="submit" class="btn btn-primary" value="ADD">
</form>
</body>
</html>




