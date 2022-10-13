<?php
    class  Point2D 
    {
        public float $x;
        public float $y;
        public function __construct(float $x, float $y){
            $this-> x = $x;
            $this-> y = $y;
        }
        public function getX(): float{
            return $this-> x;
        }
        public function getY():float{
            return $this-> y;
            
        }
        public function setX(float $x){
            $this-> x = $x;
            
        }
        public function setY(float $y){
            $this-> y = $y;
            
        }
        public function getXY(){
            return [$this->x,$this->y];
        }
        public function tostring(){
            return "cuong ml";
        }

        

    }
    class Point3D extends Point2D {
        public float $z;
        public function __construct(float $x,float $y,float $z){
            parent::__construct($x,$y);
            $this->z = $z;
        }
        public function getZ():float {
          return  $this->z ;

        }
        public function setZ(float $z) {
            $this->z = $z;

        }
        public function setXYZ(float $x,float $y,float $z ){
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;

        }
        public function getXYZ(){
            return [$this->x,$this->y,$this->z];
        }
        public function tostring(){
            return "phi ml";
        }
    }
    $point3D = new Point3D(5.2,4.3,3.7);
  echo  $point3D -> getX();
  echo "<br>";
  echo  $point3D -> getY();
  echo "<br>";

  echo  $point3D -> getZ();
  echo "<br>";
  echo "<pre>";
  

  var_dump ($point3D -> getXYZ());


  echo  $point3D -> tostring();
?>