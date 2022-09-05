<?php
include_once '../database.php';
$id = $_REQUEST['id'];
// echo $id;
$sql = "DELETE FROM `categories` WHERE `id_categories` = $id ";
// echo $sql;
$conn->exec($sql);
header('location:index.php');