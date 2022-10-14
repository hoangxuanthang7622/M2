<?php
session_start();
unset($_SESSION["id_client"]);
unset($_SESSION["name_client"]);
header("Location:login.php");

?>