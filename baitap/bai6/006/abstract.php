<?php
    abstract class HinhHoc{
        public $name;
        public abstract function chuvi();
        public abstract function dientich();

        public function getName(){

        }
    }
    // $HinhHoc1 = new HinhHoc();

    class HinhChuNhat extends HinhHoc{
        public function chuvi(){

        }
        public function dientich(){
            
        }
    }
?>