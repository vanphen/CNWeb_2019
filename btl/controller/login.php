<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login TLU</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<form action="" method="POST">
		<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img src="images/logo.png"  width="120%">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Welcome TLU
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" name="username"  required placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" required placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

				

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="../view/trangchu.php">
							Trở về trang chủ
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	</form>

	<?php 	
	if(isset($_POST['username']) && isset($_POST['password'])){
		$connect = new mysqli('localhost','root','','cse_tlu');
		if($connect->connect_error){
			die('connect khong thanh cong '.$connect->connect_error);
		}
		$connect->set_charset('utf8');
		$sql = "SELECT * FROM users WHERE email =? and password =?";
		$user = $_POST['username'];
		$pass = sha1($_POST['password']);
		echo "tai khoan : $user <br> mat khau : $pass <br>";

		if ($stsm = $connect->prepare($sql)) {
			$stsm->bind_param('ss',$user,$pass);
			
				//ecute 
			$stsm->execute();
				//get result 
			$result = $stsm->get_result();

		

		

			$num_of_rows = $result->num_rows;
			


				// get number rows
			if($num_of_rows >0){
				$_SESSION['username'] = $username;
              	
              	echo "<script>location.href='/CNWeb_2019/btl/controller/admin/index.php'</script>";
			}else {
				echo "<script>alert('Tài khoản mật khẩu không chính xác')</script>";
			}

			$stsm->free_result();
			$stsm->close();
		}

		$connect->close();
	}


	


	
	?>


<h3><?php echo $num_of_rows ; ?></h3>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>