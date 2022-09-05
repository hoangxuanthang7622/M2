<?php
include_once '../database.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM `clients` WHERE `id_client` = $id ";
$conn->exec($sql);
header("Location: index.php");