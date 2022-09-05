
<?php
 include_once "./../layout1/header.php";
 
include_once "../database.php";
$sql = "SELECT * FROM books";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetchAll();

$sql1 = "SELECT * FROM 	categories";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows1 = $stmt1->fetchAll();

$sql2 = "SELECT * FROM orders_books	";
$stmt2 = $conn->query($sql2);
$stmt2->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows2 = $stmt2->fetchAll();
 
$sql3 = "SELECT * FROM students";
$stmt3 = $conn->query($sql3);
$stmt3->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows3 = $stmt3->fetchAll();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $student_id = $_REQUEST['students'];
    $category = $_POST['category'];
    $books = $_POST['books'];
    $date_borrow = $_POST['date_borrow'];
    $date_pay = $_POST['date_pay'];
    $quantity = $_POST['quantity'];
    $sql = "INSERT INTO `orders_books` 
            (`student_id`,`date_borrow`,`date_pay`) 
            VALUES 
            ($student_id,'$date_borrow','$date_pay')";     
    $conn->exec($sql);

    $sql2 = "SELECT * FROM orders_books WHERE student_id = $student_id	";
    $stmt2 = $conn->query($sql2);
    $stmt2->setFetchMode(PDO::FETCH_OBJ);
    //fetch se tra ve du lieu 1 ket qua
    $rows2 = $stmt2->fetch();
    $rows2->id;

    $sql = "SELECT * FROM books WHERE id =  $books";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetch se tra ve du lieu 1 ket qua
    $rows = $stmt->fetch();
    $rows->id;
    $total = ($quantity * $rows->price );

    $sql = "INSERT INTO `orders_detail` 
    (`order_books_id`,`book_id`,`quantity`,`total_price`) 
    VALUES 
    ($rows2->id, $rows->id,$quantity, $total)";     
$conn->exec($sql);
    header('location:index.php');
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  </head>
<body>
<form method = 'POST'>
  
  <label for="fname"></label>students<br>
  <select class="form-control" name="students" id="">
      <?php
        foreach ($rows3 as $key => $item):
      ?>
     <option value="<?=$item->id_students?>"><?=$item->name?></option>
    <?php endforeach; ?>
    </select><br>
    
    <label for="fname"></label>category<br>
  <select class="form-control" name="category" id="">
      <?php
        foreach ($rows1 as $key => $item):
      ?>
     <option value="<?=$item->id?>"><?=$item->name_category?></option>
    <?php endforeach; ?>
    </select><br>

    <label for="fname"></label>books<br>
  <select class="form-control" name="books" id="">
      <?php
        foreach ($rows as $key => $item):
      ?>
     <option value="<?=$item->id?>"><?=$item->name?></option>
    <?php endforeach; ?>
    </select><br>
   
 
<label for="fname">Ngày mượn</label><br>
  <input type="date" id="fname" class="form-control" name="date_borrow" ><br>
  <label for="fname">Ngày trả</label><br>
  <input type="date" id="fname" class="form-control" name="date_pay"><br>
  <label for="fname">Số lượng</label><br>
  <input type="number" id="fname" class="form-control" name="quantity"><br>
 
  
  <input type="submit" value="ADD">
</form>
</body>
</html>