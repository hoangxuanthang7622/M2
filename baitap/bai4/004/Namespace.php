<?php
include_once 'DongHa/Tam.php';
include_once 'GioLinh/Tam.php';
//use namespace\ten_class
use DongHa\Tam;
use GioLinh\Tam as TamGioLinh;

$taiTam = new Tam();
$phongTam = new TamGioLinh();

$taiTam_1 = new DongHa\Tam();
$phongTam_1 = new GioLinh\Tam();

echo '<pre>';
print_r($taiTam);
print_r($phongTam);

echo '<hr>';

print_r($taiTam_1);
print_r($phongTam_1);