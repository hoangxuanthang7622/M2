

<?php
 include_once "./../layout1/header.php";
 
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

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form method = 'POST'>
  <label for="fname">Tên Danh mục sản phẩm</label><br>
  <input type="text" id="fname" class="form-control name="category"><br>
  <input type="submit" class="btn btn-primary" value="Submit">
  <a href="index.php" class="btn btn-danger">cancel</a>

</form>
</body>
</html>




