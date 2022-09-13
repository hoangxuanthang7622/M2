<?php
// dùng vardum để in ra khi chưa biết kiểu dữ liệu

//kiểm tra người dùng  đã gửi dữ liệu đi

if($_SERVER['REQUEST_METHOD'] == 'POST'){   
    //in dữ liệu ra
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    //lưu vào bộ nhớ, khai báo biến
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    echo 'Tên đăng nhập là:' . $username;
    echo '<br>';
    echo 'Mật khẩu là:' . $password;

}
    
?>
<form action="" method="post">
    <label for="">Username</label>
    <input type="text" name="username" id="">
    <br>
    <label for="">Password</label>
    <input type="text" name="password" id="">
    <br>
    <input type="submit" value="Login">
</form>