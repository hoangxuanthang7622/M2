
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
      <span class="icon"><i class="fa fa-search"></i></span>
<form method="POST" action="./../students/search.php">
      <input type="search" name="search" placeholder="Search..."  />
      <button type="submit" class="btn btn-primary">Tìm</button>
      </form>
  </div>
</div><br>
<?php 
include_once "../database.php";

?>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search = $_REQUEST['search'];
    if(isset($search)){
        $sql = "SELECT * FROM students JOIN
        classs ON students.id = classs.id_class WHERE `name` LIKE '%$search%'";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        print_r($rows);
    }
}
?>
<?php 
global $conn;
$sql = "SELECT * FROM students JOIN classs
ON students.class_id = classs.id_class";
print_r($sql);
die();
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
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
    <?php foreach($rows as $key=> $row) : ?>
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


