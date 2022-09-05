<?php
include_once '../database.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM `students` WHERE `id` = $id ";
$conn->exec($sql);
header("Location: ../index/index.php");