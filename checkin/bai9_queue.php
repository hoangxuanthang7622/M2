<?php
    class Queue 
    {
        public $queue;
        public $limit;
        public function __construct($limit = 3){
            $this-> queue = [];
            $this-> limit = $limit;
        }
        public function enqueue($item){
            array_push ($this-> queue,$item);
        }
        public function dequeue(){
            return array_shift($this-> queue);
        }
        public function isEmpty(){
            return empty(this->queue);
        }
        public function isFull(){
            
        }
    }
    $queue = new Queue();   
    echo $queue -> enqueue("thang");