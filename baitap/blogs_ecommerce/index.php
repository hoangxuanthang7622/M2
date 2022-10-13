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
    $main = new Main();
    $url = $_REQUEST['url'];
    $url = explode('/',$url);
    echo '<pre>';
    print_r($url);
    echo '</pre>';

    ?>
    </h1>
    <?php
    include('inc/footer.php');
    ?>  
</body>
</html>