<?php
    interface Resizeable {
        function resize(float $percent);
    }
    class Cricle implements Resizeable {
        
        public function resize(float $percent){
            return $this->calculatePerimeter() * (1+ $percent/100);
        }
        public int|float $radius;

      public function __construct( int|float $radius)
        {
           
            $this->radius = $radius;
        }
    
        public function calculateArea(): int|float
        {
            return pi() * pow($this->radius, 2);
        }
    
       public function calculatePerimeter(): int|float
        {
            return pi() * $this->radius * 2;
        }
        
    }

    class Rectangle implements Resizeable
{
    public function resize(float $percent){
        return $this->calculatePerimeter() * (1+ $percent/100);
    }
    public int $width;
    public int $height;

    public function __construct(int $width,int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
    }
}

class Square implements Resizeable
{
    public function resize(float $percent){
        return $this->calculatePerimeter() * (1+ $percent/100);
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
$cricle = new Cricle(5);
echo 'dien tich hinh tron ban dau = '. $cricle->calculatePerimeter();
echo '<br>';
echo 'dien tich hinh tron sau khi tang kich thuoc = '. $cricle->resize(50);
echo '<br>';

$rectangle = new Rectangle(5,10);
echo 'dien tich hinh chu nhat ban dau = '. $rectangle->calculatePerimeter();
echo '<br>';
echo 'dien tich hinh chu nhat sau khi tang kich thuoc = ' . $rectangle->resize(50);
echo '<br>';

$square = new Square(10);
echo 'dien tich hinh vuong ban dau = '. $square->calculatePerimeter();
echo '<br>';
echo 'dien tich hinh vuong sau khi tang kich thuoc = '. $square->resize(50);
