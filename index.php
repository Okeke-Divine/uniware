<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/reg.css">
	<?php

	include("css.php");
	include("function.php");
	include("conn.php");
	include("header.php");

	?>
	<meta charset="utf-8">
	<title><?php echo $site_name; ?></title>
</head>
<body>

	<div class="login100-form-title center_div" style="background-image: url(imgs/bg-01.jpg);height: 300px;">
					<span class="login100-form-title-1">
						Join classes online now.
					</span>
				</div>


	<main class="container" role="main">


		<div class="flexex1" id="get-started">
                         
           	<div class="cards_def">
           		<h5 class="card-title">Request | School</h5>

							Add your school to <?php echo $site_name2; ?> to have online classes with your student.
<br>
                     <button class="btn btn-info mt" onclick="window.location = 'request';">Request Account</button>
           	</div>
           	<div class="cards_def">


           		<h5 class="card-title">View | School</h5>

							Have you added your school <?php echo $site_name2; ?>?
							<input type="text" class="form-control jdj" id="code" placeholder="School Code">
<br>
                     <button class="btn btn-primary mt" onclick="code()">View Account</button>


           	</div>

           	           	<div class="cards_def">


           		<h5 class="card-title">Register | Admin</h5>

							My school has been verified register as an admin to start your school online and lots more.
							<input type="text" class="form-control jdj" id="code1" placeholder="School Code">
<br>
                     <button class="btn btn-primary mt" onclick="register()">Register</button>


           	</div>


           		<div class="cards_def">


           		<h5 class="card-title">Account</h5>

					Already a user? Login to learn from your school and lot's more.
					<Br>
					<b>#<?php echo $site_name1; ?> </b>  
					<br>        		
                     <button class="btn btn-secondary mt" onclick="window.location = 'select-login';">Login</button>


           	</div>


		</div>	

	</main>

<script type="text/javascript">
	function code(){
		var code = _('code').value;
		if(code == ""){

		}else{
			window.location = 'school-admin?school='+code;
		}
	}
	function register(){
		var code = _('code1').value;
		if(code == ""){

		}else{
			window.location = 'register?school='+code;
		}
	}
</script>

</body>
</html>