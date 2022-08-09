<?php
    class ArrayList
    {
        private $elements = [];
        public function add($item): void{
            array_push($this->elements,$item);
        }
        public function get($index): string|int{
            return $this->elements[$index];
        }
        public function size(): int{
            return count($this-> elements);
        }
        public function isEmpty(){
            if($this-> size() == 0){
                return true;
            }else{
               return false;
            }
        }
        public function find($item): string|int{
            foreach ($this-> elements as $key => $value){
                if($value == $item){
                    echo $key;
                    echo $value;

                }
            }
        }
        public function removeByIndex($index): void{
            unset($this-> elements[$index]);
        }
        public function toArray(): array{
            return $this-> elements;
        }
        public function addAtPos($item,$index){
            array_splice($this->elements,$index,0,$item);
        }

    }
    $ArrayList = new ArrayList();

    $ArrayList -> add("phi");
    $ArrayList -> add("cuong");
    $ArrayList -> add("tam");
    $ArrayList -> add("tan");
    $ArrayList -> add("tan1");
   
    
    echo $ArrayList-> get(3);
    echo "<br>";
    echo $ArrayList-> size(1);
    
    echo "<pre>";
     $ArrayList -> removeByIndex(3);
     var_dump ($ArrayList -> isEmpty());

     print_r($ArrayList-> toArray());
