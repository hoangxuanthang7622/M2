<?php
    class CustomException extends Exception{
        public function HienThiLoi(){
            $error = '';
            $error .= '<br> Loi:' . $this->getMessage();//nội dung lỗi
            $error .= '<br> Code:' . $this->getCode();// mã lỗi
            $error .= '<br> File:' . $this->getFile();//file chứa lỗi
            $error .= '<br> Line:' . $this->getLine();// dòng xảy ra lỗi
            return $error;
        }
    }
    
    function sum($a,$b){
        if($b == 0){
            throw new CustomException('so chia = 0'); 
        }
        $c = $a / $b;
        echo 'kết quả là ' . $c;
    }
      
        try{
            sum(5,0);
    } catch (\Exception $e) {
        echo $e -> HienThiLoi();
    }finally{
        echo 'vào khối finally';
    }   