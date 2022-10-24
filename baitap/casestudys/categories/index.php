
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

global $conn;
// $sql = "SELECT * FROM categories";
// $stmt = $conn->query($sql);
// $stmt->setFetchMode(PDO::FETCH_OBJ);
// //fetchALL se tra ve du lieu nhieu hon 1 ket qua
// $rows = $stmt->fetchAll();
    $start = 0;  $per_page = 4;
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
        // query to get messages from messages table
        $q = "SELECT * FROM categories LIMIT $start, $per_page";
        $query = $conn->prepare($q);
        $query->execute();

        if($query->rowCount() > 0){
            $rows = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        // count total number of rows in students table
        $count_query = "SELECT * FROM categories";
        $query = $conn->prepare($count_query);
        $query->execute();
        $count = $query->rowCount();
        // calculate the pagination number by dividing total number of rows with per page.
        $paginations = ceil($count / $per_page);
    // print_r ($rows);
    ?>

 <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Danh mục sản phẩm</h4>
                    </div>
<a  class="btn btn-primary" href="add.php">Thêm</a>
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
        <td><?=$row['name_category']?></td>
        <td>
            <a class="btn btn-success" href="edit.php?id=<?=$row['id_categories']?>">Chỉnh sửa</a>
            <a class="btn btn-danger" onclick=" return confirm('Bạn có chắc chắn xoá không ?')" href="delete.php?id=<?=$row['id_categories']?>">Xoá</a>
        </td>
    </tr>
 
    <?php endforeach; ?>

</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php
                if($page_counter == 0){
                    echo "<li  class='page-item'><a href=?start='0' class='page-link'>0</a></li>";
                    for($j=1; $j < $paginations; $j++) { 
                      echo "<li class='page-item'><a class='page-link' href=?start=$j>".$j."</a></li>";
                   }
                }else{
                    echo "<li><a href=?start=$previous>Previous</a></li>"; 
                    for($j=0; $j < $paginations; $j++) {
                     if($j == $page_counter) {
                        echo "<li class='page-item'><a class='page-link' href=?start=$j >".$j."</a></li>";
                     }else{
                        echo "<li class='page-item'><a href=?start=$j class='page-link'>".$j."</a></li>";
                     } 
                  }if($j != $page_counter+1)
                    echo "<li class='page-item'><a href=?start=$next class='page-link'>Next</a></li>"; 
                } 
            ?>
            
  </ul>
</nav>

<?php
include_once '../layout/footer.php';