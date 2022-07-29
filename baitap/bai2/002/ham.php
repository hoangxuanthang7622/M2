<?php
    // function hello(){
    //     echo "xin chào";
    // }
    // hello();


//     function sum($a,$b){
//         return  $a + $b;
      
//     }
//    $result = sum(3,7);
//    echo $result



function cong($a,$b){
    return $a + $b;
}
function tru($a,$b){
    return $a - $b;
    
}
function nhan($a,$b){
    return $a * $b;
    
}
function chia($a,$b){
    return $a / $b;
    
}
$pheptinh = "+";
$a = 5;
$b = 6;
switch ($pheptinh) {
    case '+':
       $ketqua = cong($a,$b);
        break;
     case '-':
     $ketqua = tru($a,$b);

         break;
     case '*':
        $ketqua = nhan($a,$b);

         break;
      case '/':
        $ketqua = chia($a,$b);

       break;
                            
    
    default:
        echo "phép tính không đúng" ;
        break;
}
echo $a .' ' . $pheptinh . ' '. $b . ' = ' . $ketqua;
?>