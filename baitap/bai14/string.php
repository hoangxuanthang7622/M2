<?php
    // $name = "Nguyễn Văn A";
    // $name_2 = "Nguyễn 'Văn' A";
    // echo '<input type="text" value = "123>';
    // $name = 'Nguyễn Văn A';
    // $msg = 'Xin chào ' . $name; 
    // $msg = "Xin chao $name";
    // echo $msg;

    /*
    Cac ham xu ly chuoi:
    Tim kiem va xu ly cac bai tap sau:
    1. Chuyen chuoi Toi,yeu,lap,trinh sang mang
    ['Toi','yeu','lap',trinh]
    - Goi y: Tach chuoi thanh mang PHP

    2. Chuyen mang ['Toi','yeu','lap',trinh] sang chuoi Toi yeu lap trinh
    - Goi y: Chuyen mang thanh chuoi PHP

    3. Tu chuoi Toi yeu lap trinh thay the bang Toi yeu CodeGym
    - Goi y: 
    4. Tu chuoi Toi yeu CodeGym, kiem tra ky tu CodeGym co nam trong chuoi hay khong ?
    - Goi y: 
    */
    $msg ="tôi,yêu,lập,trình";
    echo '<pre>';
    print_r( explode(',',$msg));

    $msg1 = ['Toi','yeu','lap','trinh'];
    $str =  implode(" ",$msg1);
    echo $str;

    $subject = 'lập trình';
    $search = 'codegym';
    $replace = 'tôi yêu lập trình';
    $result = str_replace($subject,$search,$replace);
    echo '<pre>';
    print_r($result);

    $str = 'tôi yêu codegym';
    $pos = strpos($str,'codegym');
    if($pos!== false){
        echo 'tồn tại';
    }else{
        echo 'không tồn tại';
    }


