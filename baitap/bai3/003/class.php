<?php
   class Person {
       public string $name;
       public int $age;
       public function __construct($ts_name,$ts_age)
       {
           $this-> name = $ts_name;
           $this-> age = $ts_age;
       }
       public function sayHello():string
       {
            return 'hello';
       }
       public function getAge():int
       {
            return $this->age;
       }
       public function getName():string
       {
             return $this->name;

       }
   }
   $person = new Person('tâm',25);
   echo '<pre>';
   print_r($person);
   echo '</pre>';
   
   echo $person->sayHello();
   echo '<br>';
   echo $person->getAge();
   echo '<br>';
   echo $person->getName();

