<?php

include_once( 'dd/Chicken.php');
include_once('dd/Tiger.php');

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
    
 