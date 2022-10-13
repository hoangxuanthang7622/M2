<?php
    class Triangle {
        public $side1 = 1.0;
        public $side2 = 1.0;
        public $side3 = 1.0;
        public function __construct($side1,$side2,$side3)
        {
            $this-> side1 = $side1;
            $this-> side2 = $side2;
            $this-> side3 = $side3;
        }
        public function getSide1(){
            return $this->side1;
        }
        public function setSide1($side1){
            $this->side1 = $side1;
        }
        public function getSide2(){
            return $this->side2;
        }
        public function setSide2($side2){
            $this->side2 = $side2;
        }
        public function getSide3(){
            return $this->side3;
        }
        public function setSide3($side3){
            $this->side3 = $side3;
        }
        public function getPerimeter(){
            return $this-> side1 + $this-> side2 + $this->side3;
        }
        public function toString(){
            'của lớp cha';
        }
    }
   class Shape extends Triangle{
       public $height;
       public function __construct($side1,$side2,$side3,$height)
       {
           parent::__construct($side1,$side2,$side3);
           $this->height = $height;
       }
       public function getArea(){
           return ($this->side1 * $this->height) / 2;
       }
    }
    $Triangle = new Triangle(5,5,5);
    $Shape = new Shape(5,5,5,10);
  echo 'chu vi của tam giác là: ' . $Triangle->getPerimeter();
  echo '<br>';
  echo 'diện tích của tam giác là: ' . $Shape->getArea();
