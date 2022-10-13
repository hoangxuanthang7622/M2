<?php
include_once('Circle.php');
include_once('Rectangle.php');
include_once('Square.php');
$Circle = new Circle(3,"hinhtron");
echo 'diện tích hình tròn: ' . $Circle -> dientich() . "<br>";
echo 'chu vi hình tròn: ' . $Circle -> chuvi() . "<br>";

$Rectangle = new Rectangle(5,10);
echo 'diện tích hình chữ nhật: ' . $Rectangle -> dientich() . "<br>";
echo 'chu vi hình chữ nhật: ' . $Rectangle -> chuvi() . "<br>";
$Square = new Square(2);
echo 'diện tích hình vuông: ' . $Square -> dientich() . "<br>";
echo 'chu vi hình vuông: ' . $Square -> chuvi() . "<br>";