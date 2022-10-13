<?php
    /*
    • enqueue(): thêm (hay lưu trữ) một phần tử vào trong hàng đợi.
    • dequeue(): xóa một phần tử từ hàng đợi.
    • peek(): lấy phần tử ở đầu hàng đợi, mà không xóa phần tử này
    • isEmpty(): Kiểm tra rỗng
    • isFull(): kiểm tra xem hàng đợi đã đầy hay chưa
    */
    class Queue{
        protected $elements = [];
        protected $limit;  
        public function __construct($ts_limit)
        {
            $this->limit = $ts_limit;
        }
        //đưa phần tử vào đầu mảng
        public function enqueue($elm){
            if($this->isFull() == false){
                array_push($this->elements,$elm);

            }else{
                echo 'queue is full';
            }
        }
        //xoá phần tử ở đầu mảng
        public function dequeue(){
            if($this->isFull() == false){
            array_shift($this->elements);

            }else{
                echo 'queue is empty';
            }

        }
        //lấy phần tử đầu mảng
        public function peek(){
            if($this->isFull() == false){
                return current($this->elements);

            }else {
                echo 'queue is empty';
            }

            
        }
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
    $objQueue = new Queue(6);
    $objQueue->enqueue('văn');
    $objQueue->enqueue('sử');
    $objQueue->enqueue('địa');
    $objQueue->enqueue('toán');
    $objQueue->enqueue('lý');
    $objQueue->enqueue('hoá');
    echo '<br>';

    // $objQueue->dequeue();
    var_dump($objQueue->isEmpty());
    echo '<br>';
    var_dump($objQueue->isFull());
    
    echo $objQueue->peek();
    echo '<pre>';
    print_r($objQueue);
    die();