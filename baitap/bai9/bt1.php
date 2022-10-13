<?php
    class Stack {
        public $stack = [];
        public $limit;
        public function __construct($ts_limit)
        {
            $this->limit = $ts_limit;
        }
        public function push($elm){
            array_unshift($this->stack,$elm);
        }
        public function pop(){
            array_shift($this->stack);
        }
        public function top(){
            return current($this->stack);
        }
        public function isEmpty(){
            if(count($this->stack) == 0){
                return true;
            }else {
                return false;
            }
        }
    }

    $objStack = new Stack(5);
    $objStack->push('thắng');
    $objStack->push('cường');
    $objStack->push('phi');
    $objStack->push('tâm');
    $objStack->push('vy');
    $objStack->pop();
  echo  $objStack->top();
  var_dump($objStack->isEmpty());

    echo '<pre>';
    print_r($objStack);
    die();