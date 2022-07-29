<?php

include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');
include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');



class Chicken extends Animal 
{
    public function makeSound(): string
    {
        return "Chicken: cluck-cluck!";
    }

    public function howToEat(): string
    {
        return "could be fried";
    }
}
// $Chicken = new Chicken();
// echo $Chicken -> makeSound();
// $Chicken -> howToEat();