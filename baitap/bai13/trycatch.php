<?php
    $a = 4;
    $b = null;
    function xoa(){
        throw new Exception("xoá không thành công");
        
    }
    try {
        xoa();
        //code thực thi
        if($b === 0){
            throw new Exception("chia cho 0");
            
        }
        if(!$b){
            throw new Exception("yêu cầu giá trị b");
            
        }
        $c =$a / $b;
        echo 'kết quả là' . $c;
    } catch (\Exception $e) {
        //xử lí khi xảy ra lỗi logic
        echo 'đã có lỗi xảy ra: ' . $e->getMessage();
    }finally{
        echo '<br> finally';
    }