<?php
 define ("SLOW",1);
 define ("MEDIUM",2);
 define ("FAST",3) ;
    class Fan{
        public $speed = SLOW;
        public $on = false;
        public $radius = 5;
        public $color  = blue;

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

    }
    public function setRadius($ts_Radius){
        
    }
    public function setColor($ts_color){
        
    }
    public function setSpeed($ts_Speed){
        
    }
    public function String(){
        if($this-> getOn()){
            return "quạt đang bật: tốc độ ".  $this->getSpeed(). "màu sắc " . $this->getColor() . "bán kính " . getRadius();
     
    }else {
        return "quạt đã tắt: màu sắc " . $this->getColor() . "bán kính " . getRadius();
    }
    
    }
}
    $fan = new Fan();
    $fan -> getSpeed();
    $fan -> getOn();
    $fan -> getRadius();
    $fan -> getColor();
?>