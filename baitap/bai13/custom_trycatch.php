<?php
    class CustomException extends Exception{
        public function getCustomException(){
            $error = '';
            $error .= '<br> Lỗi: ' . $this->getMessage(); 
            $error .= '<br> Dòng: ' . $this->getLine(); 
            $error .= '<br> code: ' . $this->getCode(); 
            $error .= '<br> file: ' . $this->getFile(); 
            return $error;
        }
    }
    try {
        //code thực thi
        throw new CustomException("xoá không thành công");
        
    } catch (\CustomException $e) {
        //xử lí khi xảy ra lỗi logic
        echo 'đã có lỗi xảy ra: ' . $e->getCustomException();
    }