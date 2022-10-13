<?php
 include_once '../database.php';
 global $conn;
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = $_REQUEST['id'];
  $sql = "UPDATE products SET `Garbage_can` = null  WHERE id_product='$id'";
  $conn->query($sql);
  header('location:Garbage.php');

}
