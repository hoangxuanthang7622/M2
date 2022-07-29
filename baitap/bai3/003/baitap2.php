<?php
 define ("SLOW",1);
 define ("MEDIUM",2);
 define ("FAST",3) ;
    class Fan{
        public $speed = SLOW;
        public $on = false;
        public $radius = 5;
        public $color  = 'blue';

    public function __construct(){

    }
    public function getSpeed(){
        return $this-> speed;

    }
    public function getOn(){
        return $this-> on;
           
    }
    public function getRadius(){
        return $this-> radius;
           
    }
    public function getColor(){
        return $this-> color;

    }
    public function setOn($ts_on){
        $this->on = $ts_on;
    }
    public function setRadius($ts_Radius){
        $this->radius = $ts_Radius;
        
    }
    public function setColor($ts_color){
        $this->color = $ts_color;
        
    }
    public function setSpeed($ts_Speed){
        $this->speed = $ts_Speed;
        
    }
    public function toString(){
        if($this-> getOn()){
            return "quạt đang bật:" . "<br>" ."tốc độ: ".  $this->getSpeed(). "<br>". "màu sắc: " . $this->getColor() ."<br>". "bán kính: " . $this->getRadius();
     
    }else {
        return "quạt đã tắt:" . "<br>" . "màu sắc: " . $this->getColor() ."<br>" . "bán kính: " . $this->getRadius();
    }
    
    }
}
    $fan1 = new Fan();
    
    $fan1 -> getOn();
    $fan1 -> getRadius();
    $fan1 -> getSpeed();
    $fan1 -> getColor();
    $fan1 -> setOn(true);
    $fan1 -> setRadius(10);
    $fan1 -> setColor('yellow');
    $fan1 -> setSpeed(FAST);
  echo  $fan1 -> toString();
    

    
    $fan2 = new Fan();
     $fan2 -> getSpeed();
    $fan2 -> getOn();
    $fan2 -> getRadius();
    $fan2 -> getColor();
    $fan2 -> setOn(false);
    $fan2 -> setSpeed(MEDIUM);
    $fan2 -> setColor("blue");
    $fan2 -> setRadius(5);
  echo  $fan2 -> toString();

?>