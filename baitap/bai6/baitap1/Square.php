<?php
    class Square 
    {
        public $a;
        public function __construct($a){
            $this-> a = $a;
        }
        public function dientich(){
            return $this->a * $this->a;
        }
        public function chuvi(){
            return $this->a * 4;
        }
    }