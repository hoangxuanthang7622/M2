<?php 
include_once '../database.php';
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
$email = $_REQUEST['email'];
$password = md5($_REQUEST['password']);
$password1 = md5($_REQUEST['password1']);
$name = $_REQUEST['name'];
$address = null;
$phone = null;
if($name == ''){
    $err['name']="không thể để trống mục này!";
}
if($password == ''){
    $err['password']="không thể để trống mục này!";
}   
if($password1 == ''){
    $err['password1']="không thể để trống mục này!";
} 
if($email == ''){
    $err['email']="không thể để trống mục này!";
}      
if(empty($err)){
if($password1 == $password){
   
        $sql = "INSERT INTO `clients` 
        (`name_client`,`email`,`password`,`address`,`phone`) 
        VALUES 
        ('$name','$email','$password','$address','$phone')";
      
      $conn->exec($sql);
      header('location:../login/login.php');
}


}
}


 
?>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="col-md-4 col-md-offset-4" id="login">
						<section id="inner-wrapper" class="login">
							<article>
								<form method="POST">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
											<input type="text" name = "name" class="form-control" placeholder="Name">
                                            <span><?php if(isset($err['name'])){echo $err['name'];}; ?></span><br>

										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
											<input type="email" name = "email" class="form-control" placeholder="Email">
                                            <span><?php if(isset($err['email'])){echo $err['email'];}; ?></span><br>

										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password" name = "password" class="form-control" placeholder="Password">
                                        <span><?php if(isset($err['password'])){echo $err['password'];}; ?></span><br>

										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password" name = "password1" class="form-control" placeholder="Confirm Password">
                                                <span><?php if(isset($err['password1'])){echo $err['password1'];}; ?></span><br>

										</div>
									</div>
									  <button type="submit" class="btn btn-success btn-block">Submit</button>
								</form>
							</article>
						</section></div>
                        </body>
</html>