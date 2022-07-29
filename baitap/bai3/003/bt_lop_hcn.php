<?php
  if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $width = $_POST['rong'];
    $height = $_POST['cao'];
}

    class Rectangle {
        public int $width;
        public int $height;
    
        public function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }
        public function getArea() {
            return $this->width * $this->height;
        }
        public function getPerimeter() {
            return (($this->width + $this->height) * 2);
        }
        public function display() {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
        }
    }

    $rectangle = new Rectangle($width,$height);

      $rectangle -> height;
    $rectangle -> width;
    echo $rectangle -> getArea(). "<br>";
    // echo $rectangle -> height. "<br>";
    echo $rectangle -> display();
    // $rectangle -> getPerimeter();
    //  $rectangle -> display();

   
?>
<!DOCTYPE html>
<html>
<body>
<form action="" method = "POST" >
  <label for="fname">Nhập chiều rộng:</label><br>
  <input type="text" id="fname" name="rong"><br>
  <label for="lname">Nhập chiều cao:</label><br>
  <input type="text" id="lname" name="cao" ><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>