<?php
include_once "../database.php";
$sql = "SELECT * FROM categories";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetchAll();

$sql1 = "SELECT * FROM products";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows1 = $stmt1->fetchAll();

$sql2 = "SELECT * FROM sizes";
$stmt2 = $conn->query($sql2);
$stmt2->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows2 = $stmt2->fetchAll();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name_product = $_POST['name'];
    $category_id = $_POST['category'];
    $size = $_POST['size'];
    $image = $_POST['image'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    if($name_product == ''){
        $err['name']="không thể để trống mục này!";
    }   
    if($price == ''){
        $err['price']="không thể để trống mục này!";
    }   
    if(empty($err)){
        $sql = "INSERT INTO `products` 
            (`name_product`,`category_id`,`size_id`,`image`,`desc`,`price`) 
            VALUES 
            ('$name_product','$category_id',$size,'$image','$desc',$price)";
    
    // echo $sql;
    // die();
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
            <div class="row">
               <div class="col-sm-12">
                  <div class="white-box">
      <form>
     
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Tên sản phẩm</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name ="name" >
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Danh mục</label>
      <select name="category" class="form-control" id="">
                    <?php foreach ($rows as $row) {?>
                    <option value="<?=$row->id_categories;?>"><?=$row->name_category;?></option>
                    <?php } ?>
                </select><br>
  <span><?php if(isset($err['category'])){echo $err['category'];}; ?></span><br>
  <div class="form-group">
      <label for="exampleInputPassword1">Size</label>
      <select name="size" class="form-control" id="">
                    <?php foreach ($rows2 as $row) {?>
                    <option value="<?=$row->id;?>"><?=$row->size;?></option>
                    <?php } ?>
                </select><br>
  <span><?php if(isset($err['category'])){echo $err['category'];}; ?></span><br>


      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Ảnh</label>
      <input type="file" class="form-control" id="exampleInputPassword1" name ="image">
  <span><?php if(isset($err['image'])){echo $err['image'];}; ?></span><br>

      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Mô tả</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name ="desc" >
  <span><?php if(isset($err['desc'])){echo $err['desc'];}; ?></span><br>

      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Giá</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name ="price">
  <span><?php if(isset($err['price'])){echo $err['price'];}; ?></span><br>

      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      </div>
      </div>
      </div>
      </form>
<?php 
include_once '../layout/footer.php';
?>
