<?php
    /*
    • push(): lưu giữ một phần tử trên ngăn xếp
    • pop (): Xoá một phần tử từ ngăn xếp
    • peek(): lấy phần tử dữ liệu ở trên cùng của ngăn xếp, mà không
    xóa phần tử này.
    • isEmpty(): Kiểm tra rỗng
    • isFull(): kiểm tra xem ngăn xếp đã đầy hay chưa.

    */

        class Stack{
            protected $elements = [];
            protected $limit;  
            public function __construct($ts_limit)
            {
                $this->limit = $ts_limit;
            }
            public function push($elm){
                if($this->isFull() == false){
                    array_unshift($this->elements,$elm);

                }else{
                    echo 'Stack is full';
                }
            }
            //hàm xoá pt đầu mảng
            public function pop(){
                if($this->isEmpty() == false){
                    array_shift($this->elements);

                }else{
                    echo 'Stack is empty';
                }
            }
            //hàm trả về giá trị pt đầu mảng
            public function peek(){
                if($this->isEmpty() == false){
                    return current($this->elements);

                }else{
                    return 'Stack is empty';
                }
            }
            //hàm kiểm tra rỗng hay ko
            public function isEmpty(){
                if(count($this->elements) == 0){
                    return true;
                }else {
                    return false;
                }
            }
            public function isFull(){
                if(count($this->elements) == $this->limit){
                    return true;
                }else{
                    return false;
                }
            }

    }
    $objStack = new Stack(3);
    $objStack->push('văn');
    $objStack->push('sử');
    $objStack->push('địa');
    $objStack->pop();
    echo $objStack->peek();
    echo '<br>';

    var_dump($objStack->isEmpty());

    echo '<pre>';
    print_r($objStack);
    die();