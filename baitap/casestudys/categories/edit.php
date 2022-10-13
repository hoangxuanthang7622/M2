<?php
include_once "../database.php";
?>


<?php
$id = $_REQUEST['id'];
// echo $id;
$sql = "SELECT * FROM categories WHERE id_categories='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetch();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product = $_REQUEST['name'];
    
    $sql = "UPDATE Categories SET name_category='$product' WHERE id_categories='$id'";
    $conn->query($sql);
    header('location:index.php');
 }
?>

<?php include_once "./../layout/header.php";
?>
    <div class="container">
        <form method="post" action="">
            <legend>Category edit</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" value="<?php echo $rows->name_category; ?>">
                <span><?php if (isset($errors['name'])) {
                            echo $errors['name'];
                        }
                          ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            <a href="index.php" class="btn btn-danger">Huỷ</a>
        </form>
    </div>


<?php include_once "./../layout/footer.php"; ?>