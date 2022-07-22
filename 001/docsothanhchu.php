<?php
$donvi = [
    "0" => "không",
    "1" => "một",
    "2" => "hai",
    "3" => "ba",
    "4" => "bốn",
    "5" => "năm",
    "6" => "sáu",
    "7" => "bảy",
    "8" => "tám",
    "9" => "chín",
    "10" => "mười",
];
$chuc = [
    "11" => "mười một",
    "12" => "mười hai",
    "13" => "mười ba",
    "14" => "mười bốn",
    "15" => "mười lăm",
    "16" => "mười sáu",
    "17" => "mười bảy",
    "18" => "mười tám",
    "19" => "mười chín",
];
$hangchuc = [
  "0" => "",
    "20" => "hai mươi",
    "30" => "ba mươi",
    "40" => "bốn mươi",
    "50" => "năm mươi",
    "60" => "sáu mươi",
    "70" => "bảy mươi",
    "80" => "tám mươi",
    "90" => "chín mươi",

];
$tram = [
    "100" => " một trăm",
    "200" => " hai trăm",
    "300" => " ba trăm",
    "400" => " bốn trăm",
    "500" => " năm trăm",
    "600" => " sáu trăm",
    "700" => " bảy trăm",
    "800" => " tám trăm",
    "900" => " chín trăm",
];
if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $so = $_POST['so'];
    if($so != ""){
      switch ($so) {
        case $so >= 0 && $so <= 10:
          echo $donvi[$so];
          break;
        case $so >= 11 && $so <= 19:
          echo $chuc[$so];
          break;
        case $so >= 20 && $so <= 99:
            $hangchuc1 = (int)($so / 10) * 10;
            $donvi1 = $so - $hangchuc1;
            if($donvi1 == 0){
                echo $hangchuc[$hangchuc1];
            }else{
         echo $hangchuc[$hangchuc1] . ' ' . $donvi[$donvi1];
                
            }
          break;
          case $so >= 100 && $so <= 999: // /900
            $hangtram1 = (int)($so / 100) * 100; //900
            $hangchuc1 = $so - $hangtram1;  //0
            $hangchuc2 = (int)($hangchuc1 / 10) * 10; //0
            $donvi1 = $hangchuc1 - $hangchuc2; //0
     
         if ($hangchuc1 == 0){
            echo $tram[$hangtram1];
        } else if($hangchuc1 > 10 && $hangchuc1 < 20){
          echo $tram[$hangtram1] . ' ' . $chuc[$hangchuc1];
        }
        else if ($hangchuc2 == 0 && $donvi1 > 0 && $donvi1 < 10){
          echo $tram[$hangtram1] . ' lẽ ' . $donvi[$donvi1];
        }else if ($donvi1 == 0 ){
          echo $tram[$hangtram1] . " " . $hangchuc[$hangchuc2];
        }
        else {
          echo $tram[$hangtram1] . ' ' . $hangchuc[$hangchuc2]. " " . $donvi[$donvi1];
        }
        break;
      }  
    }else{
      echo "Nhập số đi ku";
    }
}
?>
<form action="" method = "post">
  <label for="fname"></label><br>
  <input type="number" id="fname" name="so"><br>
  <input type="submit" value="Đổi">
</form> 