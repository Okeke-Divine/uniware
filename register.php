<!DOCTYPE html>
<html>
<head>
	<?php

	include("css.php");
	include("js.php");
	include("function.php");
	include("conn.php");
	include("void/action.php");



	?>

	<meta charset="utf-8">
	<title><?php echo $site_name; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
	<link rel="stylesheet" type="text/css" href="Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/reg.css">
</head>
<body>

	
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<div class="login100-form-title" style="background-image: url(imgs/bg-01.jpg);">
					<?php


	if(!isset($_GET['school'])){
		echo write::alert_error("You can't register an empty school");
		?>
		<style type="text/css">
			form{
				display: none!important;
			}
		</style>
		<?php
	}else{
		$query = mysqli_query($conn,"SELECT * FROM $schools");
	}

?>
					<span class="login100-form-title-1">
						Welcome Admin
						<?php echo s::school_admin($_GET['school']); ?>
						<?php echo s::reg_info($_GET['school']);
						?>
							<?php

	if(isset($_POST['reg'])){
		$uname = $_POST['uname'];
		$psw = $_POST['psw'];
		$email = $_POST['email'];
		$phn = $_POST['phn'];
		if(empty($uname) || empty($psw) || empty($email) || empty($phn)){
			write::alert_error('All fields are required');
		}else{
			$scode = $_GET['school'];
			if(schools::reg_info($uname,$psw,$scode,$email,$phn) == "success"){
				echo write::alert_success('Success fully registered');
				?>
				<style>
					form{
						display: none!important;
					}
				</style>
				<?php
			}else{
				echo write::alert_error('Not registered');
			}
		}
	}

	?>
					</span>
				</div>

				<form method="post" action="" method="post" class="login100-form validate-form">

<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="uname" placeholder="Enter Uname" required="">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter email" required>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="psw" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
							<span class="label-input100">Phone number</span>
							<input class="input100" type="text" name="phn" placeholder="Phone Number" required>
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn" align="right">
						<button type="submit" class="login100-form-btn" name="reg">
							Register
						</button>
						
						</buttonn></a>
					</div>

				</form>
			</div>
		</div>
	</div>
	



</body>
</html>



