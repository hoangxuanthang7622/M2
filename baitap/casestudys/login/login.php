<?php 
// session_start();
// include_once '../database.php';
//  if($_SERVER['REQUEST_METHOD'] == 'POST'){
// $account = $_REQUEST['account'];
// $password = md5($_REQUEST['password']);


// global $conn;
// $sql = "SELECT * FROM clients WHERE email = '$account'";
// $stmt = $conn->query($sql);
// $stmt->setFetchMode(PDO::FETCH_OBJ);
// //fetch se tra ve du lieu 1 ket qua
// $items = $stmt->fetch();
// if(is_array($items)) {
// 	$_SESSION["id_client"] = $items['id_client'];
// 	$_SESSION["name_client"] = $items['name_client'];
// 	} 


// 	if(isset($_SESSION["id_client"])) {
//     header('location:../main/index.php');
// 	}


//  }
 session_start();
 $message="";
 if(count($_POST)>0) {
	 $con = mysqli_connect('localhost','root','','casestudy') or die('Unable To connect');
	 $result = mysqli_query($con,"SELECT * FROM clients WHERE email='" . $_POST["account"] . "' and password = '". md5($_POST['password'])."'");
	 $row  = mysqli_fetch_array($result);
	 if(is_array($row)) {
	 $_SESSION["id_client"] = $row['id_client'];
	 $_SESSION["name_client"] = $row['name_client'];
	 } else {
	  $message = "Invalid Username or Password!";
	 }
 }
 if(isset($_SESSION["id_client"])) {
	header('location:../main/index.php');
 }
//  else{
// 	header('location:login.php');
//  }
 
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
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Đăng nhập</h3>
				<div class="d-flex justify-content-end social_icon">
				<a href="https://www.facebook.com/"><span><i class="fab fa-facebook-square"></i></span></a>	
                <a href="https://www.gmail.com/"><span><i class="fab fa-google-plus-square"></i></span></a>	
                <a href="https://www.twitter.com/"><span><i class="fab fa-twitter-square"></i></span></a>	
				</div>
			</div>
			<div class="card-body">
				<form method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="account" class="form-control" placeholder="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name = "password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
			<a href="../register/register.php">Đăng kí</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Quên mật khẩu ?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>