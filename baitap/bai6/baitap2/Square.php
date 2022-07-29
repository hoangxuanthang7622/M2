<?php
include ('interface.php');
 class Square implements Colorable
 {
     public $a;
     public function __construct ($a){
         $this->a = $a;
     }
     public function howToColor(){
         echo "Color all four sides";
     }
     public function dientich(){
         return $this->a * $this->a;
     }
     
 }
?>