
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<?php include_once "../layout/header.php";
include_once "../database.php";

?>
<?php 
global $conn;
$sql = "SELECT * FROM clients";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
?>
<a  class="btn btn-primary" href="add.php">ADD</a>
<div class="container">
<table class = "table">
<thead class="thead-dark">
    <tr>
        <th>id</th>
        <th>Họ & Tên</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Tuỳ chỉnh</th>

        
    </tr>
    <?php foreach($rows as $key=> $row) : ?>
    <tr>
        <td><?=$key + 1?></td>
        <td><?=$row->name_client?></td>
        <td><?=$row->address?></td>
        <td><?=$row->phone?></td>
        <td>
            <a class="btn btn-success" href="edit.php?id=<?=$row->id_client?>">edit</a>
            <a class="btn btn-danger"  onclick=" return confirm('Bạn có chắc chắn xoá không ?')"    href="delete.php?id=<?=$row->id_client?>">delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include_once "../layout/footer.php";?>

