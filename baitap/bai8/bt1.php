<?php
    class MyList {
        private int $size;
        private array $elements = [];
       
        public function insert($index,$obj){
            array_splice($this->elements,$index,$obj);

        }
        //thêm một phần tử
        public function add($obj){
            array_push($this->elements,$obj);
        }
       
        //xoá phần tử trong mảng
        public function remove($index){
           if(array_key_exists($index,$this->elements)) {
                unset($this->elements[$index]);
           }
        }
        //lấy ra phần tử trong mảng 
        public function get($index){
            return $this->elements[$index];
            
        }
         public function clear(){
            $this->elements = [];
        }
        public function getElenments(){
            return $this->elements;
        

        }
        public function addAll($arr){
            $this->elements = $arr;
            array_merge($this->elements,$arr);
        }
        public function indexOf($obj){
            
        }
        public function isEmpty(){
            if(count($this->elements) == 0){
                return true;
            }else{
                return false;
            }
        }
        public function sort(){
            sort($this->elements);
        }
        public function reset(){
            return $this->elements = [];
            
        }
        public function size(){
            return count($this->elements);
        }

    }
    $objMyList = new MyList();
$objMyList->addAll([1,2,3,4]);  //thêm nhiều pt

    $objMyList->add(5);
    $objMyList->add(6);
    $objMyList->add(10);
    $objMyList->add(8);
    $objMyList->add(0);
    // $objMyList->clear();

    // $objMyList->remove(1);//xoá 2
//    echo ($objMyList->get(2));//lấy phần tử ở vị trí 2
//    echo $objMyList->insert(0,1);
   echo '<br>';
//    echo $objMyList->size(); //lấy về số lượng phần tử

    echo '<pre>';
    print_r($objMyList->getElenments());
    $objMyList->reset();
   $objMyList->remove(1);//xoá 2
    $objMyList->sort();
   print_r($objMyList->getElenments());
//    var_dump($objMyList->isEmpty()); //false
   
   
