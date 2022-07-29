<?php
    class Rectangle
    {
        public $width;
        public $height;
        public function __construct($width,$height){
            $this->width = $width;
            $this->height = $height;
        }
        public function dientich(){
            return $this->width * $this->height;
        }
        public function chuvi(){
            return (($this->width + $this->height) * 2);
        }

    }
?>