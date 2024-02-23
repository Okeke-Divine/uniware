<!DOCTYPE html>
<html>
<head>
	<?php

	include("css.php");
	include("function.php");
	include("conn.php");
	include("header.php");

	?>
	<title>Uniware - Admin Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
</head>
<body>

<br>
<main class="container" role="main">
	<?php

	if(!empty($_GET['school'])){
		$school_code = $_GET['school'];
		echo school::load($school_code);
	}else{
		echo write::alert_error('School is empty!');
	}

	?>
</main>

</body>
</html>