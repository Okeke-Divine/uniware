<!DOCTYPE html>
<html>
<head>
	<?php
	
	session_start();
	include("css.php");
	include("js.php");
	include("function.php");
	include("conn.php");
	include("void/action.php");



	?>

	<meta charset="utf-8">
	<title>Student Login - <?php echo $site_name; ?></title>
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
					<span class="login100-form-title-1">
						Student Login
						<?php

						if(isset($_POST['login'])){
							$uname = $_POST['uname'];
							$psw = $_POST['psw'];
							$school = $_POST['school'];
							if(empty($uname) || empty($psw) || empty($school)){
								echo write::alert_error('All fields are required');
							}else{
								if(schools::login_s($uname,$psw,$school) == "success"){
									$_SESSION['sclass_uname'] = $uname;
									$_SESSION['sclass_psw'] = $psw;
									$_SESSION['sclass_rank'] = "student";
									$_SESSION['sclass_scode'] = $school;

									$query = mysqli_query($conn,"SELECT * FROM $users_students WHERE user_name = '".$uname."' && password = SHA1 ('".$psw."') && school = SHA1 ('".$school."')");
									while($row = mysqli_fetch_assoc($query)){
										$_SESSION['sclass_id'] = $row['id'];
									}
									header("location:en/");
								}else{
									echo write::alert_error('Invalid Login');
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

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="psw" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>


					<div style="border:0;" class="wrap-input100 validate-input m-b-18" data-validate = "Schhol is required">
							<span class="label-input100">School</span>
							<select name="school" class="form-control">
								<option>Select School</option>
								<?php

								include("conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $schools WHERE verified = '1'");
			while($row = mysqli_fetch_assoc($query)){
				$s = $row['school_name'];
				$sc = $row['school_code'];
				echo "<option value='".$sc."'>".$s."</option>";
			}

								?>
							</select>

						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn" align="right">
						<button type="submit" class="login100-form-btn" name="login">
							Login
						</button>
						
						</buttonn></a>
					</div>

				</form>
			</div>
		</div>
	</div>


</body>
</html>