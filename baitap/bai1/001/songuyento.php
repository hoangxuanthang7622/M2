
   <?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
        $number = $_POST['number'];
        // $number ='';
$dem = 0;
$count = 0;
$sum = 0;
for ($i = 2; $i < 1000; $i ++){
    for($j = 1; $j <= $i; $j ++){
        if ( $i % $j == 0){
            $dem ++;
        }
    }
    if($dem == 2){
        $count ++;
        $sum += $i;
        
        if($count == $number){
            echo $sum;
            break;
        }
    }
    $dem = 0;
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
    <form action="" method="POST">
        <input type="text" name ="number">nhập số nguyên tố <br>
        <input type="submit" value="hiển thị">

    </form>
 
</body>
</html>

