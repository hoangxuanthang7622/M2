<?php
 include_once '../database.php';
$id = $_REQUEST['id'];
// echo $id;
$sql = "SELECT * FROM categories";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetchAll();

$sql = "SELECT * FROM products WHERE id_product='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$items = $stmt->fetch();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name_product = $_REQUEST['name'];
    $category_id = $_REQUEST['category'];
    $price = $_REQUEST['price'];
    if($name_product == ''){
        $err['name']="không thể để trống mục này!";
    }   
    if($price == ''){
        $err['price']="không thể để trống mục này!";
    }   
    if(empty($err)){
        $sql = "UPDATE products SET `name_product` = '$name_product', `category_id` = $category_id, `price` = $price  WHERE id_product='$id'";
        $conn->query($sql);
        header('location:index.php');
    }
    // echo $books;
   
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: red;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <legend>books edit</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Tên sách" value="<?php echo $items->name_product; ?>">
             
                <span><?php if (isset($err['name'])) {
                            echo $err['name'];
                        }
                          ?></span>
                 <select name="category" class="form-control" id="">
                    <?php foreach ($rows as $row) {?>
                    <option <?=$row->id_categories == $items->category_id ? "selected" : " " ?> value="<?=$row->id_categories;?>"><?=$row->name_category;?></option>
                    <?php } ?>
                </select><br>
                <input type="text" name="price" id="" class="form-control" placeholder="Giá tiền" value="<?php echo $items->price; ?>">
             
          
                <span><?php if (isset($err['price'])) {
                            echo $err['price'];
                        }
                          ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-danger">cancel</a>
        </form>
    </div>
</body>
</html>

<?php include_once "./../layout/footer.php"; ?>