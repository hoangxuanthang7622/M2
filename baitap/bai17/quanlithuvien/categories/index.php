
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<?php include_once "../layout1/header.php";
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
<a  class="btn btn-primary" href="add.php">Add</a>
<table class="table">
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <?php foreach($rows as $key=> $row) : ?>
    <tr>
        <td><?=$key + 1?></td>
        <td><?=$row->name_category?></td>
        <td>
            <a class="btn btn-success" href="edit.php?id=<?=$row->id?>">edit</a>
            <a class="btn btn-danger" onclick=" return confirm('Bạn có chắc chắn xoá không ?')" href="delete.php?id=<?=$row->id?>">delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>







<?php include_once "../layout1/footer.php";?>