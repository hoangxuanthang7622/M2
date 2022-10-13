<?php
   class Animal{
    public $name;
    public $color;
    ///phương thức khởi tạo
    public function __construct($name1,$color1){
        $this->name = $name1;
        $this->color = $color1;
    }
    public function say(){
        echo __METHOD__ ."<br>";
    }
    public function go(){
        echo __METHOD__ ."<br>";

    }
    public function setName($name1){
        // echo __METHOD__ ."<br>";
        $this->name = $name1;
    }
    public function getName(){
        // echo __METHOD__ ."<br>";
        return $this-> name;
        
    }
    public function setColor($color1){
        // echo __METHOD__ ."<br>";
        $this->color = $color1;
    }
    public function getColor(){
        // echo __METHOD__ ."<br>";
        return $this-> color;
    }
   }
   $meo = new Animal("meoo","blue");
//    $meo -> say();
//    $meo -> go();
//    $meo -> setName("cho");
//    $meo -> getName();
//    $meo -> setColor("blue");
//    $meo -> getColor();

//    echo $meo->name;
//    echo "<br>";
//    echo $meo->color;
//    echo '<pre>';
//    print_r($meo);
//    echo '<pre>';


   $cun = new Animal("cun","den");
//    echo $cun -> name;
//    echo "<br>";
//    echo $cun -> color;

//gọi phương thức in ra giá trị name và color
   $cun -> setName("phi");
   $cun -> setColor("hồng cánh sen");
//in đối tượng
echo '<pre>';
print_r($cun);
echo '</pre>';

//truy xuất thuộc tính
   echo $cun -> name;
   echo '<br>';
   echo $cun -> color;
   

//     //gọi phương thức trả về giá trị name và color
  echo $cun -> getName();
  echo "<br>";
  echo $cun -> getColor();
  ///vòng đời của đối tượng
  

?>