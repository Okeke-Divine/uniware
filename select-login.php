<!DOCTYPE html>
<html>
<head>
	<?php

	include("css.php");
	include("js.php");
	include("function.php");
	include("conn.php");

	?>
	<meta charset="utf-8">
	<title><?php echo $site_name; ?> - Select Account</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
</head>
<body>

<main class="container" role="main">
	<div class="cards_def wd100">
		<center>
			<h4><?php echo $site_name; ?> - Select account type to continue</h4>

		</center>
		<?php
		if(isset($_GET['logout'])){
			echo write::alert_success('You successfully logged out.');
		}
		?>
		<div class="flexex1">

           	<div class="cards_def alert alert-success liv pointer" style="" onclick="window.location = 'admin-login';">
           		<i class="fa fa-user"></i>
				<h5>Admin</h5>
				<span class="content">
					Login as an admin to control your school.
				</span>
           	</div>
           		<div class="cards_def alert alert-info liv pointer" style="" onclick="window.location = 'teacher-login';">
           			<i class="fa fa-users"></i>
				<h5>Teacher</h5>
				<span class="content">
					Login as a teacher to teach students.
				</span>
           	</div>
           		<div class="cards_def alert alert-dark liv pointer" style="" onclick="window.location = 'student-login';">
           			<i class="fa fa-graduation-cap"></i>
				<h5>Student</h5>
				<span class="content">
					Login as a student to join classes.
				</span>
           	</div>

        </div>
	</div>
</main>

	<style type="text/css">
		body,html{
			background: #f0f5f5;
		}
	</style>

</body>
</html>