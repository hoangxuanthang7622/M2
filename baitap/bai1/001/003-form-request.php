
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .login {
            width:230px;
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
        h2 {
            text-align: center;
        }
        .login input {
            padding:5px; margin:5px
        }
    </style>
</head>
<body>
    <form action="" method="GET">
    <div class="login">
        <h2>Login</h2>
        <label>
        Username:
            <input type="text" name="username" id="" placeholder="username"> 
        </label>
        <label>
        Password:
            <input type="password" name="password" id="" placeholder="password"> 
        </label>
        <input type="submit" value="Login">
        </div>
    </form>
</body>
</html> 
<?php
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';
   
    if ( $_SERVER['REQUEST_METHOD'] == 'GET'){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        if ($username === "admin" && $password === "admin") {
            echo "<h3>Welcome <span style='color:red'>" .$username. "</span> to website</h3>";
        } else{
            echo "<h3><span style='color:red'>Login Error</span></h3>";
        }
    }
    
   
