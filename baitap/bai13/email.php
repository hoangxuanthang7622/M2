<?php
class CustomException extends Exception {
    public function getCustomMessage(){
        $error = '';
        $error .= '<br> Lỗi: '.$this->getMessage();
        $error .= '<br> Dòng: '.$this->getLine();
        $error .= '<br> Code: '.$this->getCode();
        return $error;
    }
}
// var_dump( false );
// var_dump( 0 );

$email = "someone@test.com";
/*
filter_var: loc gia tri
param_2: email
*/
 try {
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         throw new CustomException($email);
     }
     if ( strpos($email,'test') !== false ) {
         throw new Exception("$email is an test e-mail");
     }
 } catch (CustomException $e) {
     echo '1: '.$e->getCustomMessage();
 } catch (Exception $e) {
     echo '2: '.$e->getMessage();
 }