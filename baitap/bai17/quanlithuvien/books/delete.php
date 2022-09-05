<?php
include_once '../database.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM `books` WHERE `id` = $id ";
$conn->exec($sql);
header("Location: index.php");