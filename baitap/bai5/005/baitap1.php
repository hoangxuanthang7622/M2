<?php
    class Circle 
    {
    public $radius;
    public $color;
    public function __construct($radius,$color){
        $this->radius = $radius;
        $this->color = $color;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function getRadius(){
        return $this-> radius ;
    }
    public function setColor($color){
        $this->color = $color;
        
    }
    public function getColor(){
        return $this-> color;
        
    }
    public function ShinhTron(){
        return   $this->radius * $this->radius * pi();
    }
    public function tostring(){
        return "ban kinh 5, red";
    }
    }
    class Cylinder extends Circle{
        public $height;
        public function __construct($radius,$color,$height){
            parent::__construct($radius,$color);
            $this->height = $height;
        }
        public function VhinhTron(){
            return pi() * $this->radius * $this->radius * $this-> height;
        }
        public function tostring(){
            return "ban kinh 4, black";
        }
    }
    $cylinder = new Cylinder(4,'blue',10);
    $circle = new Circle(4,'blue');

 echo "the tich hinh tron" . $cylinder -> VhinhTron();
 echo "<br>";
 echo  $cylinder -> tostring();
 echo "<br>";

 echo $cylinder-> getColor();
 echo "<br>";

 echo $cylinder-> getRadius();
 echo'</br>';
 echo $circle-> ShinhTron();
 // a khang note

 
?>