<?php
    $books = array('văn','sử','địa');
    $books2 = ['văn','sử','địa'];

    //in ra mảng
    echo '<pre>';
    print_r($books);
    echo '<pre>';

    //độ dài
    echo count($books);
    //duyệt mảng
    for($i = 0; $i < count($books); $i++){
        echo $books[$i] . "<br>";
    }
    //thêm 
    $books[count($books)] = "sinh";
    array_push($books,"lý");
    $books[] = "Anh";
    
    //sửa
    $books[0] = 'Văn Học';
    $books[1] = 'Sử Học';

    //xóa
    unset( $books[5] );
    print_r($books) ;

    // //xóa phần tử đầu tiên
    // array_shift( $books );

    // //xóa phần tử cuối
    // array_pop( $books );
    echo '<br>';

    echo '<pre>';
    print_r($books);
    echo '</pre>';

     // for ($i=0; $i < count($books); $i++) { 
    //     if( isset($books[$i]) ){
    //         echo $books[$i].'<br>';
    //     }
    // }

    foreach( $books as $key => $book ){
        echo 'Key: '.$key.' - Value: '.$book.'<br>';
    }


?>