<?php
include_once('Circle.php');
include_once('Rectangle.php');
include_once('Square.php');
$Circle = new Circle(3,"hinhtron");
echo $Circle -> dientich() . "<br>";
echo $Circle -> chuvi() . "<br>";

$Rectangle = new Rectangle(5,10);
echo $Rectangle -> dientich() . "<br>";
echo $Rectangle -> chuvi() . "<br>";
$Square = new Square(2);
echo $Square -> dientich() . "<br>";
echo $Square -> chuvi() . "<br>";