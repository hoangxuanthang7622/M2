
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<h1 style="text-align: center;">Quản lý học sinh</h1>
<div class="box">
    <form action="search.php" method="POST">
    <div class="container-1">
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" name="search" id="search" placeholder="Search..." />
      <input type="submit" value="Tìm kiếm">
  </div>

    </form>
  
</div>
<?php 
include_once "../db.php";

?>
<?php 
global $conn;
// $sql = "SELECT students.*, class.id as id_class, class.name_class FROM students join class on students.class = class.id";
// $stmt = $conn->query($sql);
// $stmt->setFetchMode(PDO::FETCH_OBJ);
// //fetchALL se tra ve du lieu nhieu hon 1 ket qua
// $rows = $stmt->fetchAll();

$start = 0;  $per_page = 2;
$page_counter = 0;
$next = $page_counter + 1;
$previous = $page_counter - 1;

if(isset($_GET['start'])){
 $start = $_GET['start'];
 $page_counter =  $_GET['start'];
 $start = $start *  $per_page;
 $next = $page_counter + 1;
 $previous = $page_counter - 1;
}
$sql = "SELECT students.*, class.id as id_class, class.name_class FROM students join class on students.class = class.id LIMIT $start, $per_page";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
$count_query = "SELECT * FROM students";
$query = $conn->prepare($count_query);
$query->execute();
$count = $query->rowCount();
// calculate the pagination number by dividing total number of rows with per page.
$paginations = ceil($count / $per_page);
?>
<a  class="btn btn-primary" href="add.php">Thêm</a>
<table class = "table">
    <tr>
        <th>Mã học sinh</th>
        <th>Tên học sinh</th>
        <th>Lớp</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Thông tin của học sinh</th>

        
    </tr>
    <?php foreach($rows as $key=> $row) : ?>
    <tr>
        <td><?=$key + 1?></td>
        <td><?=$row->name?></td>
        <td><?=$row->name_class?></td>
        <td><?=$row->birthday?></td>
        <td><?=$row->gender?></td>
        <td><?=$row->thongtin?></td>
        <td>
            <a class="btn btn-success" href="edit.php?id=<?=$row->id?>">Chỉnh sửa</a>
            <a class="btn btn-danger"  onclick=" return confirm('Bạn có chắc chắn xoá không ?')" href="delete.php?id=<?=$row->id?>">Xoá</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<nav aria-label="...">
  <ul class="pagination">
<?php

                if($page_counter == 0){
                    for($j=0; $j < $paginations; $j++) {
                        if($j == $page_counter) {
                           echo "<li class='page-item '><a class='page-link' href=?start=$j >".$j."</a></li>";
                        }else{
                           echo "<li class='page-item '><a href=?start=$j class='page-link'>".$j."</a></li>";
                        } 
                     }if($j != $page_counter+1)
                       echo "<li class='page-item'><a href=?start=$next class='page-link'>Next</a></li>";   
                }else{
                    echo "<li><a href=?start=$previous>Previous</a></li>"; 
                    for($j=0; $j < $paginations; $j++) {
                     if($j == $page_counter) {
                        echo "<li class='page-item '><a class='page-link' href=?start=$j >".$j."</a></li>";
                     }else{
                        echo "<li class='page-item '><a href=?start=$j class='page-link'>".$j."</a></li>";
                     } 
                  }if($j != $page_counter+1)
                    echo "<li class='page-item'><a href=?start=$next class='page-link'>Next</a></li>"; 
                } 
            ?>
 </ul>
</nav>


