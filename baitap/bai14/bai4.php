<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
        $string = $_REQUEST['kiemtrasdt'];
       
    $Pattern = '/^\([0-9]{2,2}\)-\([0][0-9]{9,9}\)$/';
    
    if(preg_match($Pattern,$string)){
        echo 'số điện thoại hợp lệ ' . $string;
    }else{
        echo 'số điện thoại không hợp lệ ' . $string;

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = 'POST'>
        <table>
            <tr>
                <td>nhập số điện thoại</td>
                <td><input type="text" name ="kiemtrasdt"></td>
            </tr>
            <tr>
                <td><input type="submit" value = "kiểm tra"></td>
            </tr>
        </table>
</body>
</html>