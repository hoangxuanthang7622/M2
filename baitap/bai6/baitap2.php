<?php
    interface Colorable {
        function howToColor();
    }
    class Square implements Colorable {
        public function howToColor(){
            return 'red';   
        }
        public $a;
        public function __construct($a){
            $this-> a = $a;
        }
        public function calculateArea(): float|int{
            return $this->a * $this->a;
        }
        public function calculatePerimeter(): float|int{
            return $this->a * 4;
        }
    }
    
    class Rectangle implements Colorable
    {
        public function howToColor(){
            return 'blu';   
        }
        public $width;
        public $height;
        public function __construct($width,$height){
            $this->width = $width;
            $this->height = $height;
        }
        public function calculateArea(){
            return $this->width * $this->height;
        }
        public function calculatePerimeter(){
            return (($this->width + $this->height) * 2);
        }

    }

    $hinhhoc[0] = new Square(10);
    $hinhhoc[1] = new Rectangle(10,10);
    foreach ($hinhhoc as $key => $value) {
        echo 'diện tích:' . $value -> calculateArea() . '<br>';
        if ($value instanceof Square) {
            echo $value->howToColor() . '<br>';
        }
    }

