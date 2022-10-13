
<?php
    
 if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
}
    class QuadraticEquation
    {
        private $a;
        private $b;
        private $c;
        public function __construct($a1,$b1,$c1){
            $this->a = $a1;
            $this->b = $b1;
            $this->c = $c1;
        }
        public function getA(){
            return $this-> a;
        }
        public function getB(){
            return $this-> b;
            
        }
        public function getC(){
            return $this-> c;
            
        }
        public function getDiscriminant(){
            return $this->b * $this->b - 4*$this->a*$this->c;
        }
        public function  getRoot1() {
            return -$this->b + sqrt ($this->getDiscriminant()/2 * $this->a);
        }
        public function  getRoot2() {
            return -$this->b - sqrt ($this->getDiscriminant()/2 * $this->a);
        }
        public function getRoot3(){
            if ($this->getDiscriminant() > 0){
                echo "phương trình có 2 nghiệm = ";
                echo "<br>";
                echo "X1 =" . $this-> getRoot1();
                echo "<br>";
                echo "X2 =" . $this-> getRoot2();
            }else if ($this-> getDiscriminant() < 0){
                echo "phương trình vô nghiệm";
            }else{
                echo "phương trình có nghiệm kép X1 = X2 = " . -$this->b / 2 * $this->a;
            }
        }
    }
    $ptbac2 = new QuadraticEquation($a,$b,$c);
  echo  $ptbac2 -> getRoot3();
?>
<!DOCTYPE html>
<html>
<body>
<form action="" method = "POST" >
  <label for="fname"></label><br>
  <input type="text" id="fname" name="a" placeholder = "Nhập số a" ><br>
  <label for="lname"></label><br>
  <input type="text" id="lname" name="b" placeholder = "Nhập số b" ><br>
  <label for="lname"></label><br>
  <input type="text" id="lname" name="c" placeholder = "Nhập số c" ><br>
  <input type="submit" value="Tính">
</form> 
</body>
</html>