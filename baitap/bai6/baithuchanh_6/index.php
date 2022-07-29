<?php

include_once(dirname(__FILE__) . '/Animals/Chicken.php');
include_once(dirname(__FILE__) . '/Animals/Tiger.php');

// include "/../Animals/Tiger.php";
// include "/../Animals/Chicken.php";


echo('---- Animals<br>');

$animals[0] = new Chicken();
$animals[1] = new Tiger();
 foreach($animals as $animal ){
    echo $animal -> makeSound();
    if( $animal instanceof Chicken){
        echo $animal-> howToEat();
    }
 }
    
 