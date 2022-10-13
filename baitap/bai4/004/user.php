<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){   
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $role = $_REQUEST['role'];

    class User {
        protected string $name;
        protected string $email;
        public int $role;
        public function __construct($name,$email,$role)
        {
            $this->name = $name;
            $this->email = $email;
            $this->role = $role;
        }
        
        public function getInfo(){
            return $this->name;
        }
        public function isAdmin(){
            if($this->role == 1){
                echo "là admin";
            }else if($this->role > 1){
                echo "là người dùng bình thường";
            }
        }
        public function setName($ts_name){
            $this->name = $ts_name;
        }
        public function setEmail($ts_email){
            $this->email = $ts_email;
        }
        public function setRole($ts_role){
            $this->role = $ts_role;
        }
    }
    $user = new User($name,$email,$role);
    
   $user-> setName($name);
    $user-> setEmail($email);
    $user-> setRole($role);
    $user-> isAdmin();
      $user-> getInfo();
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
<form action="" method = "POST">
<label for="lname">Tên đăng nhập</label><br>
  <input type="text" id="lname" name="name"><br><br>
  <label for="lname">email</label><br>
  <input type="text" id="lname" name="email"><br><br>
  <label for="lname">Kiểm tra role</label><br>
  <input type="text" id="lname" name="role"><br><br>


  <input type="submit" value="Submit">
</form> 
</body>
</html>