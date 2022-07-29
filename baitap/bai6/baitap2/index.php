<?php

//cách viết thứ 1
include_once(dirname(__FILE__) . '../../baitap1/Circle.php');

// cách viết 2
include_once('./../baitap1/Circle.php');
include_once('Rectangle.php');
include_once('Square.php');

$hinhhoc[0] = new Circle(3,"hinhtron");
$hinhhoc[1] = new Rectangle(3,5);
$hinhhoc[2] = new Square(5);
foreach ($hinhhoc as $key => $value) {
    echo $value -> dientich(). "<br>";
    if ($value instanceof Square) {
        echo $value->howToColor() . '<br>';
    }
 
}