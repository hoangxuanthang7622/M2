<?php
    include_once 'models/Order.php';
    class OrderController {
        
        // Hien thi tat ca
        public function index(){
            $objOrder = new Order();
            $items =  $objOrder->all();
        // var_dump($items);
            
            //goi view
            include_once 'views/orders/list.php'; 
        }

        // Hien thi chi tiet
        public function show(){
            $id = $_GET['id'];
            $objOrder = new Order();
            $item = $objOrder->find($id);
            include_once 'views/orders/show.php';
        }

        // Hien thi form them moi
        public function add(){
            include_once 'views/orders/add.php';
            
        }

        //Xu ly form them moi
        public function store(){
            $data=[
                'MAKHACHHANG'=> $_REQUEST['MAKHACHHANG'],
                'MANHANVIEN'=> $_REQUEST['MANHANVIEN'],
                'NGAYDATHANG'=> $_REQUEST['NGAYDATHANG'],
                'NGAYGIAOHANG'=> $_REQUEST['NGAYGIAOHANG'],
                'NGAYCHUYENHANG'=> $_REQUEST['NGAYCHUYENHANG'],
                'NOIGIAOHANG'=> $_REQUEST['NOIGIAOHANG']
            ];
            
            // echo '<pre>';
            // print_r($_REQUEST);
            // die();
            $objOrder = new Order();
            $objOrder->save($data);
            header('Location: index.php?controller=order&page=index');
        }
        

        // Hien thi form edit
        public function edit(){
            $id = $_GET['id'];
            $objOrder = new Order();
            $item = $objOrder->find($id);
            include_once 'views/orders/edit.php';
        }
        //Xu ly edit
        public function update(){
            $id = $_REQUEST['id'];
            $data=[
                'MAKHACHHANG'=> $_REQUEST['MAKHACHHANG'],
                'MANHANVIEN'=> $_REQUEST['MANHANVIEN'],
                'NGAYDATHANG'=> $_REQUEST['NGAYDATHANG'],
                'NGAYGIAOHANG'=> $_REQUEST['NGAYGIAOHANG'],
                'NGAYCHUYENHANG'=> $_REQUEST['NGAYCHUYENHANG'],
                'NOIGIAOHANG'=> $_REQUEST['NOIGIAOHANG']
            ];

            $objOrders = new Order();
                //   print_r(123);
                //  die();
            $objOrders->update($id, $data);
            header('Location: index.php?controller=order&page=index');
        }

        // Phuong thuc delete
        public function delete(){
            $id = $_REQUEST['id'];
            $objOrder = new Order();
            $objOrder->delete($id);
            header('Location: index.php?controller=order&page=index');
        }
        
        
    }