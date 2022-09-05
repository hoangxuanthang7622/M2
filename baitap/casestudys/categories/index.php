<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<?php
include_once '../layout/header.php';
include_once "../database.php";
 ?>
<?php 
global $conn;
$sql = "SELECT * FROM categories";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
// print_r ($rows);
?>
<a  class="btn btn-primary" href="add.php">ADD</a>
<div class="container-fluid">

<table class="table">
    <tr class="thead-dark">
        <th>ID</th>
        <th>Name</th>
        <th>Tuỳ chỉnh</th>
    </tr>
    <?php foreach($rows as $key=> $row) : ?>
    <tr>
        <td><?=$key + 1?></td>
        <td><?=$row->name_category?></td>
        <td>
            <a class="btn btn-success" href="edit.php?id=<?=$row->id_categories?>">edit</a>
            <a class="btn btn-danger" onclick=" return confirm('Bạn có chắc chắn xoá không ?')" href="delete.php?id=<?=$row->id_categories?>">delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php
include_once '../layout/footer.php';