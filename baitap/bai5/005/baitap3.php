<?php
    class Point {
        public float $x;
        public float $y;
        public function __construct(float $x, float $y)
        {
            $this->x = $x;
            $this->x = $y;
        }
        public function getX(){
            return $this->x;
        }
        public function getY(){
            return $this->y;
        }
        public function setX(float $x){
            $this->x = $x;
        }
        public function setY(float $y){
            $this->y = $y;
        }
        public function setXY(float $x, float $y){
            $this->x = $x;
            $this->y = $y;
        }
        public function getXY():array{
            return [$this->x,$this->y];
        }
        public function toString(){
            return 'của lớp cha';
        }

    }
    class MoveablePoint extends Point {
        public float $xSpeed;
        public float $ySpeed;
        public function __construct(float $x, float $y,float $xSpeed,float $ySpeed)
        {
            Parent::__construct($x,$y);
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed; 
        }
        public function getXSpeed():float{
            return $this->xSpeed;
        }
        public function setXSpeed(float $xSpeed){
             $this->xSpeed = $xSpeed;
        }
        public function getYSpeed():float{
            return $this->ySpeed;
        }
        public function setYSpeed(float $ySpeed){
            $this->ySpeed = $ySpeed;
       }
       public function getSpeed(){
           return [$this->xSpeed*$this->ySpeed];
       }
       public function Move(){
            
       }
       public function toString(){
        return 'của lớp con';
    }
    }
    // $Point = new Point(2,3);
    $MoveablePoint = new MoveablePoint(2,3,4,5);
   print_r($MoveablePoint->getSpeed());
   echo '<br>';

   print_r($MoveablePoint->getXSpeed());
   echo '<br>';

   print_r($MoveablePoint->getYSpeed());
   echo '<br>';

 echo  $MoveablePoint->toString();
    