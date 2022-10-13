<?php
 include_once '../database.php';
 global $conn;
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = $_REQUEST['id'];
  $sql = "UPDATE products SET `Garbage_can` = 1  WHERE id_product='$id'";
  $conn->query($sql);
  header('location:index.php');

}
