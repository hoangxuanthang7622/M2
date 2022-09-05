
<?php


 
include_once "../database.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $category = $_POST['category'];
  
  
      if($category == ''){
        $err['category']="không thể để trống mục này!";
    }   
   
    if(empty($err)){
      $sql = "INSERT INTO `categories` 
      (`name_category`) 
      VALUES 
      ('$category')";

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
      <label for="exampleInputPassword1">Loại giày</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name ="category" >
  <span><?php if(isset($err['category'])){echo $err['category'];}; ?></span><br>

      </div>
      <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
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




