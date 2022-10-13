<?php
        //ResizeAble: khả năng cho phép điều chỉnh kích thước
        interface ResizeAble {
            //hằng số
            const SIZE = 0;
            //PTTT: rezise
            function resize();
        }
        interface Fillcolor{
            //PTTT: fill
            function fill();
        }
        abstract class HinhHoc1{
            abstract function TinhDienTich();
            abstract function TinhChuVi();
        }
        class HinhVuong extends HinhHoc1 implements ResizeAble,Fillcolor{
            public function TinhDienTich(){

            }
            public function TinhChuVi(){

            }
            public function resize(){

            }
            public function fill(){

            }
      

        }