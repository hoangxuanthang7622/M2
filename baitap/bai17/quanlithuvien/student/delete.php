<?php
include_once '../database.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM `students` WHERE `id_students` = $id ";
$conn->exec($sql);
header("Location: index.php");