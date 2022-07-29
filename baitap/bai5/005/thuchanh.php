<?php
    class shape 
    {
        public string $name;
        
        public function __construct(string $name) {
            $this-> name = $name;
        }
        public function show(): string {
            return "I am a shape. My name is $this->name";
        }
    }
    class  Circle extends shape
    {
        public int|float $radius;
       

        public function __construct(int $radius,string $name) {
            parent::__construct($name);
            $this->radius = $radius;
        }
        public function dientich(){
           return pi() * $this->radius * $this->radius;
        }
        public function chuvi(){
            return $this->radius * 2 * pi();
        }
        
    }
    class Cylinder extends Circle{
        public int $height;
        public function __construct(int $height,int $radius,string $name){
            parent:: __construct($radius,$name);
            $this-> height = $height;
        }
        public function ShinhTru(){
           return 2 * parent::dientich();
        }
        public function Vhinhtru(){
            return $this->height * parent::dientich();
        }
    }
    class Rectangle extends shape  {
        public int $width;
        public int $height;
        public function __construct(string $name,$width,$height){
            parent:: __construct($name);
            $this-> width = $width;
            $this-> height = $height;
        }
        public function Shcn(){
            return $this->width * $this->height;
        }
        public function chuvihcn(){
            return (($this->width + $this -> height) * 2);
        } 
    }
    $rectangle = new Rectangle("thang",30,10);
  echo "dien tich hinh chu nhat la: " . $rectangle -> Shcn();
  echo "<br>";
  echo "chu vi hinh chu nhat la: " . $rectangle -> chuvihcn();
  echo "<br>";

    $cirle = new Circle(20,"thang");
 echo "dien tich hinh tron la: "  . $cirle -> dientich();
 echo "<br>";
 echo "chu vi hinh tron la: " . $cirle -> chuvi();
 echo "<br>";

 $cylinder = new Cylinder(30,10,"thang");
 echo "dien tich hinh tru la: " . $cylinder -> ShinhTru();
 echo "<br>";
echo "chu vi hinh tru la: " .  $cylinder -> Vhinhtru();
?>  