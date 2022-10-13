
<?php


 
include_once "../database.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
  
  
      if($name == ''){
        $err['name']="không thể để trống mục này!";
    }
    if($address == ''){
        $err['address']="không thể để trống mục này!";
    }   
    if($phone == ''){
        $err['phone']="không thể để trống mục này!";
    }      
   
    if(empty($err)){
      $sql = "INSERT INTO `clients` 
      (`name_client`,`address`,`phone`) 
      VALUES 
      ('$name','$address','$phone')";

    $conn->exec($sql);
    header('location:index.php');
    }
}
   
?>

<?php 
include_once '../layout/header.php';
?>
      <form method = 'POST'>
         <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
               <div class="col-sm-12">
                  <div class="white-box">
      <form>
     
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Tên khách hàng</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name ="name" >
  <span><?php if(isset($err['name'])){echo $err['name'];}; ?></span><br>
  <label for="exampleInputPassword1">Địa chỉ</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name ="address" >
  <span><?php if(isset($err['address'])){echo $err['address'];}; ?></span><br>
  <label for="exampleInputPassword1">Số điện thoại</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name ="phone" >
  <span><?php if(isset($err['phone'])){echo $err['phone'];}; ?></span><br>

      </div>
      <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Thêm</button>
      <a href="index.php" class="btn btn-danger">Huỷ</a>

      </form>
      </div>
      </div>
      </div>
      </div>
      </form>
<?php 
include_once '../layout/footer.php';
?>




