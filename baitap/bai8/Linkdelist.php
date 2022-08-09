<?php
include ("Node.php");
    class Linkdelist
    {
        public  $head;
        public  $tail;
        public function __construct(){
            $this->head = null;
            $this->tail = null;
        }
        public function addFirst($nodeItem){
            $node = new Node($nodeItem);
            $node -> next = $this-> head;
            $this-> head = $node;
            if(!$this-> tail){
                $this-> tail = $node;
            }
        }
        public function addLast($nodeItem){
            $node = new Node($nodeItem);
            if(!$this-> head){
                
            }
        }
        public function removeFirst(){
            
        }
        public function removeLast(){
            
        }
        public function getFirst(){
            
        }
        public function getLast(){
            
        }

    }