<?php
        class Stack
    {
        protected $stack;
        protected $limit;
        public function __construct($limit = 5){
            $this->limit = $limit;
            $this->stack = [];
        }
        public function push($item){
            if($this-> isFull()){
                echo "đã đầy";
            }
            else{
                array_unshift($this->stack,$item);
            }
           

        }
        public function pop(){
            if($this->isEmpty() ){
                echo "stack rỗng";
            }else{
                return array_shift($this->stack);
            }

           
        }
        public function isEmpty(){
            if(count($this -> stack) == 0) {
                return true;
            }else{
                return false;
            }
        }
        public function isFull(){
            if(count($this->stack) == $this->limit){
                return true;
            }else{
                return false;
            }
        }
    }
$Stack= new Stack();
$Stack -> push("thang");
$Stack -> push("phi");
$Stack -> push("cường");
$Stack -> push("tâm");
$Stack -> push("tân");
$Stack -> push("tân1");

echo $Stack -> pop();
echo $Stack -> pop();
echo $Stack -> pop();
echo $Stack -> pop();
echo $Stack -> pop();
echo $Stack -> pop();


echo "<pre>";
echo print_r($Stack);




