
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
        $sql =" SELECT *,students.name as name_student FROM students 
        JOIN orders_books ON students.id_students =orders_books.student_id 
        JOIN orders_detail ON orders_books.id = orders_detail.order_books_id 
        JOIN books ON orders_detail.book_id = books.id 
        JOIN categories ON books.category_id = categories.id"; 
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
?>
<a  class="btn btn-primary" href="add.php">Add</a>
<table class= "table">
    <tr>
        <th>id</th>
        <th>Họ & tên</th>              
        <th>Sách</th>        
        <th>Thể loại</th>              
        <th>Số lượng</th>        
        <th>Tuỳ chỉnh</th>        
               
               
    </tr>
    <?php foreach($rows as $key=> $row) : ?>
    <tr>
        <td><?=$key + 1?></td>
        <td><?=$row->name_student?></td>
        <td><?=$row->name?></td>
        <td><?=$row->name_category?></td>
        <td><?=$row->quantity?></td>
        
        <td>
            <a class="btn btn-warning" href="../order_detail/index.php?id=<?=$row->id_students?>">Show</a>
            
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include_once "../layout1/footer.php";?>