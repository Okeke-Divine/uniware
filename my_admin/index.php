<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php
	session_start();
	include("../css.php");
	include("../js.php");
	include("../function.php");
	include("../conn.php");
	include("header.php");
	include("admin.php");
	?>
	<title><?php echo $site_name; ?> - Admin Page</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../font/css/all.css">
	<script type="text/javascript" src="../js/all.js"></script>
</head>
<body>

	<main class="container" role="main">
		<?php
		if(isset($_GET['action'])){
		$action = $_GET['action'];

		if($action != "login"){
			include("admin-ses.php");
		}

		if($action == "login"){
			include("login.php");
		}else if($action == "home"){
			include("home.php");
		}else if($action == "verify_main"){
			include("verify_main.php");
		}
		else if($action == "verify"){
			include("verify.php");
		}else{
			header("location:?action=home");
		}

	}else{
		header("location:?action=home");
	}

?>
	</main>

</body>
</html>