<?php
 include_once '../database.php';
$id = $_REQUEST['id'];
// echo $id;
$sql = "SELECT * FROM students";    
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetchAll();

$sql = "SELECT * FROM students WHERE id_students='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$items = $stmt->fetch();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $class	 = $_REQUEST['class'];
    $phone	 = $_REQUEST['phone'];
    if($name == ''){
        $err['name']="không thể để trống mục này!";
    }   
    if($address == ''){
        $err['address']="không thể để trống mục này!";
    }  
    if($class == ''){
      $err['class']="không thể để trống mục này!";
    }   
    if($phone == ''){
    $err['phone']="không thể để trống mục này!";
    }    
    if(empty($err)){
 $sql = "UPDATE students SET `name` = '$name', `address` = '$address', `class` = '$class', `phone` = '$phone'  WHERE id_students='$id'";
   
    $conn->query($sql);
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
            <legend>students edit</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Tên" value="<?php echo $items->name; ?>">
                <label for="disabledTextInput" class="form-label">address</label>
                <input type="text" name="address" id="" class="form-control" placeholder="Địa chỉ" value="<?php echo $items->address; ?>">
                <label for="disabledTextInput" class="form-label">class</label>
                <input type="text" name="class" id="" class="form-control" placeholder="Lớp" value="<?php echo $items->class; ?>">
                <label for="disabledTextInput" class="form-label">phone</label>
                <input type="text" name="phone" id="" class="form-control" placeholder="Số điện thoại" value="<?php echo $items->phone; ?>">
             
          
                <span><?php if (isset($errors['name'])) {
                            echo $errors['name'];
                        }
                          ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-danger">cancel</a>
        </form>
    </div>
</body>
</html>

<?php include_once "./../layout1/footer.php"; ?>