<?php
    class Student {
        private $name;
        private $age;
        private $gender;

        public function __construct( $ts_name, $ts_age, $ts_gender ){
            $this->name = $ts_name;
            $this->age = $ts_age;
            $this->gender = $ts_gender;
        }
        public function showInfo(){
            echo 'Hi' . $this->name;
        }
    }
    //khởi tạo đối tượng
    $objStudent = new Student('Nguyễn văn A',20,'male');
    echo '<pre>';
    print_r($objStudent);
    echo '</pre>';

     
