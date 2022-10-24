<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('inc/header.php');
    ?>
    <h1>
    <?php
    include_once('system/libs/main.php');

    // $main = new Main();


    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/',$url);
    include_once('app/controllers/'.$url[0].'.php');
    $product = new $url[0]();
    
    echo '<pre>';
    print_r($url);
    echo '</pre>';

    echo 'class: ' . $url[0] . '</br>';
    echo 'methods: ' . $url[1] . '</br>';
    echo 'para: ' . $url[2] . '</br>';
    echo 'id: ' . $url[3] . '</br>';

    ?>
    </h1>
    <?php
    include('inc/footer.php');
    ?>  
</body>
</html>