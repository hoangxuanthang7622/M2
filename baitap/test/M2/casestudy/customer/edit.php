<?php include_once "../database.php";
include_once './../layout/header.php';
include_once './../layout/sidebar.php';?>
<?php
if (isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_REQUEST['name'];
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $err=[];
        if(empty($name)){
            $err['name'] = "Bạn không thể để trống phần này!";
        }
        if(empty($gender)){
            $err['gender'] = "Bạn không thể để trống phần này!";
        }
        if(empty($address)){
            $err['address'] = "Bạn không thể để trống phần này!";
        }
        if(empty($phone)){
            $err['phone'] = "Bạn không thể để trống phần này!";
        }
        if(empty($err)){
            $sql = "UPDATE customer SET `name_customer`='$name' , `gender_customer` ='$gender' , `address_customer` ='$address' , `phone_customer` ='$phone' WHERE id_customer='$id'";
            $conn->query($sql);
            header('location:../index/index.php');    
        }
     }
$sql = "SELECT * FROM customer WHERE id_customer='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetch();
}
else {
    header('location:../error/404.php');
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
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
    <div class="container">
        <form method="post" action="">
            <legend>Thay Đổi Thông Tin</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Họ Và Tên</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" value="<?php echo $rows->name_customer; ?>">
                <span><?php if (isset($err['name'])) {echo $err['name'];}?></span>

               
                <label for="disabledTextInput" class="form-label">Giới Tính</label><br>
                <input type="radio" name="gender" id=""  placeholder="" value="Nam">Nam<br>
                <input type="radio" name="gender" id=""  placeholder="" value="Nữ">Nữ<br>
                <input type="radio" name="gender" id=""  placeholder="" value="Khác">Khác<br>
                <span><?php if (isset($err['gender'])) {echo $err['gender'];}?></span><br>


                <label for="disabledTextInput" class="form-label">Địa Chỉ</label>
                <input type="text" name="address" id="" class="form-control" placeholder="" value="<?php echo $rows->address_customer; ?>">
                <span><?php if (isset($err['address'])) {echo $err['address'];}?></span>

                <label for="disabledTextInput" class="form-label">Số Điện Thoại</label>
                <input type="text" name="phone" id="" class="form-control" placeholder="" value="<?php echo $rows->phone_customer; ?>">
                <span><?php if (isset($err['phone'])) {echo $err['phone'];}?></span>
            </div>
            <input type="submit" value="Lưu" class="btn btn-primary"></input>
            <a href="index.php" class="btn btn-danger">Hủy</a>
        </form>
    </div>
    </div>
    </div>
</body>
</html>
<?php include_once './../layout/footer.php';
?>
