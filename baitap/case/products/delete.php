<?php
include_once '../database.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM `products` WHERE `id_product` = $id ";
$conn->exec($sql);
header("Location: index.php");