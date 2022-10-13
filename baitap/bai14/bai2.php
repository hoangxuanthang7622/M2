<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $string = $_REQUEST['kiemtraaccount'];
    $Pattern = '/^[_a-z0-9]{6,}$/';
   
    if (preg_match($Pattern,$string)){
        echo 'mẫu account hợp lệ'; //
    }else{
        echo 'mẫu account không hợp lệ';

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
                <td>nhập account</td>
                <td><input type="text" name ="kiemtraaccount"></td>
            </tr>
            <tr>
                <td><input type="submit" value = "kiểm tra"></td>
            </tr>
        </table>
</body>
</html>