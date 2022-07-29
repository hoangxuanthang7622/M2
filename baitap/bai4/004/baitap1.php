<?php
    class User{
        protected string $name;
        protected string $email;
        public int  $role;

        public function getInfo(){
            return $this->name . $this->email . $this->role;
        }
        public function isAdmin() {
           
            if($this->role== 1){
                echo "là Admin";
            }else  {
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
    $user = new User();
    $user -> setName('thang');
    $user -> setEmail('thangdeptrai@gmail.com');
    $user -> setRole(2);
    $user -> isAdmin();


?>