<?php
    //container: lớp chứa dữ liệu
    class ArrayLish {
        //thuộc tính
        private $elements = [];
        // Lấy về một phần tử
        public function get($index){
            if(isset($this->elements[$index])){
                return $this->elements[$index];
            }else{
                return false;
            }
            
        }
        //thêm một phần tử
        public function add($elements){
            array_push($this->elements,$elements);
        }
        // xoá một phần tử  
        public function removeByIndex($index){
            array_splice($this->elements,$index,1);
        }
        //lấy về số lượng phần tử
        public function size(){
            return count($this->elements);
        }
        //tìm kiếm phần tử    
        public function find($elements){
            return array_search($elements,$this->elements);
        }
        //kiểm tra rỗng
        public function isEmpty(){
            if(count($this->elements) == 0){
                return true;
            }else{
                return false;
            }
        }
    }
    $objArrayLish = new ArrayLish();
    
    $objArrayLish->add('x.thắng');
    $objArrayLish->add('p.tâm');
    $objArrayLish->add('tài tâm');
    $objArrayLish->add('nhân');
    $objArrayLish->add('b.thắng');
    $objArrayLish->add('t.tâm');
    echo $objArrayLish->size();
    var_dump($objArrayLish->isEmpty());
    //xoá
    $objArrayLish->removeByIndex(2);
    echo  $objArrayLish->find('nhân'); //2
    echo '<br>';
    echo $objArrayLish->get(0); // xuân thắng
    echo $objArrayLish->isEmpty();
    echo '<pre>';
    print_r($objArrayLish);
    
    die();
