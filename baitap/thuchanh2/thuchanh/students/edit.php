<?php
 include_once '../database.php';
$id = $_REQUEST['id'];
// echo $id;
$sql1 = "SELECT * FROM classs";    
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows1 = $stmt1->fetchAll();

$sql = "SELECT * FROM students WHERE id ='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$items = $stmt->fetch();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name     = $_REQUEST['name'];
    $class    = $_REQUEST['class'];
    $gender	  = $_REQUEST['gender'];
    $bithday  = $_REQUEST['bithday'];
    $thongtin = $_REQUEST['thongtin'];
    if($name == ''){
        $err['name']="không thể để trống mục này!";
    }   
    if($class == ''){
        $err['class']="không thể để trống mục này!";
    }  
    if($gender == ''){
      $err['gender']="không thể để trống mục này!";
    }   
    if($bithday == ''){
    $err['bithday']="không thể để trống mục này!";
    } 
    if($thongtin == ''){
        $err['thongtin']="không thể để trống mục này!";
        }       
    if(empty($err)){
 $sql = "UPDATE students SET `name` = '$name', `class_id` = '$class', `gender` = '$gender', `bithday` = '$bithday', `thongtin` = '$thongtin'  WHERE id ='$id'";
   
    $conn->query($sql);
    header('location:../index/index.php');
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
            <legend></legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Tên" value="<?php echo $items->name; ?>">
                <label for="disabledTextInput" class="form-label">class</label>
                <select name="class" class="form-control" id="">
                    <?php foreach ($rows1 as $row) {?>
                    <option value="<?=$row->id_class;?>"><?=$row->name_class;?></option>
                    <?php } ?>
                </select><br>
                <label for="disabledTextInput" class="form-label">Giới tính</label>
                <input type="text" name="gender" id="" class="form-control" placeholder="Giới tính" value="<?php echo $items->gender; ?>">
                <label for="disabledTextInput" class="form-label">Ngày sinh</label>
                <input type="date" name="bithday" id="" class="form-control" placeholder="Ngày sinh" value="<?php echo $items->bithday; ?>">
             
          
                <span><?php if (isset($errors['name'])) {
                            echo $errors['name'];
                        }
                          ?></span>
                          <label for="disabledTextInput" class="form-label">Thông tin</label>
                <input type="textara" name="thongtin" id="" class="form-control" placeholder="thông tin" value="<?php echo $items->thongtin; ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="../index/index.php" class="btn btn-danger">cancel</a>
        </form>
    </div>
</body>
</html>
