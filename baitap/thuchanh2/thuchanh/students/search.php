<?php
include_once '../database.php';
global $conn;
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
$search = $_REQUEST['search'];
$sql1 = "SELECT * FROM students JOIN
classs ON students.class_id = classs.id_class WHERE `name` LIKE '%$search%'";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetchAll();
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
         h1 {
           text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <h1>Danh sách học sinh</h1>
        <div class="box">
  <div class="container-1">
      <form action="" method="post">
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" name="search" placeholder="Search..." />
      <button type="submit" class="btn btn-primary">Tìm</button>
      </form>
     
  </div>
</div><br>
<?php 
include_once "../database.php";
?>
<a  class="btn btn-primary" href="../students/add.php">Thêm</a>
<table class = "table"> 
    <tr>
        <th>id</th>
        <th>Họ & Tên</th>
        <th>Lớp</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Thông tin</th>
   
    </tr>
    <?php foreach($rows1 as $key=> $row) : ?>
    <tr>
        <td><?=$key + 1?></td>
        <td><?=$row->name?></td>
        <td><?=$row->name_class?></td>
        <td><?=$row->bithday?></td>
        <td><?=$row->gender?></td>
        <td><?=$row->thongtin?></td>
        <td>
            <a class="btn btn-success" href="../students/edit.php?id=<?=$row->id?>">Chỉnh sửa</a>
            <a class="btn btn-danger"  onclick=" return confirm('Bạn có chắc chắn xoá không ?')"    href="../students/delete.php?id=<?=$row->id?>">Xoá</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


