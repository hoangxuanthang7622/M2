<?php
    class Circle 
    {
        public $radius;
        public $name;
        public function __construct($radius,$name){
            $this->radius = $radius;
            $this->name = $name;
        }
        public function dientich(){
            return pi() * $this-> radius * $this-> radius;
        }
        public function chuvi(){
            return pi() * $this->radius * 2;
        }

  
}