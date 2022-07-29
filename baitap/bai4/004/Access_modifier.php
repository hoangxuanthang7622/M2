<?php
    class Man {
        public  $name;
        private $salary;
        protected $wife;

        public function __construct($name1,$salary,$wife){
            $this->name = $name1;
            $this->salary = $salary;
            $this->wife = $wife;   
        }
        public function getName(){
            return $this->name;
        }
        public function getSalary(){
            return $this->salary;
            
        }
        public function getWife(){
            return $this->wife;
            
        }
    }  
    $man = new Man("thang",50000000,"có người yêu ");
 echo  $man->name;
 echo "<br>";
//  echo  $man->salary;
//  echo  $man->wife;
echo $man-> getSalary();
echo "<br>";
echo $man-> getWife();


    