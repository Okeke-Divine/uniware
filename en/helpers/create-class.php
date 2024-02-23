<?php 
	
	@$cname = $_GET['cname'];
	
	include("index.php");
	function password_rand( $total = 6 ) 
	{
		$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$pass = substr( str_shuffle( $string ), 0, $total );
		
		return $pass;
	}
	$class_code = password_rand(20);
	$check_class = mysqli_query($conn,"SELECT * FROM $class_info WHERE class_code = '$class_code'");
	$ready = 0;
	if(mysqli_num_rows($check_class) > 0){
		echo "<div class='alert alert-danger'>An error was detected while trying to create your class please reload this page and try again.</div>";
		die();
	}

	$create_class = mysqli_query($conn,"INSERT INTO $class_info (`class_name`,`user_id`,`user_rank`,`class_code`,`time_created`,`school`,`class_background`) VALUES ('$cname','$ses_id','$ses_rank','$class_code',UNIX_TIMESTAMP(),'$school_code_sha1','bg-malibu-beach')");
	if($create_class){
		echo "<div class='alert alert-success'>Your class was succesfully created.<br>
		Class Code: <b>".$class_code."</b></div>";
	}

?>