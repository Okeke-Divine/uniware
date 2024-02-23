<?php

	include("index.php");
	if($_REQUEST['psw'] && $_REQUEST['uname']){
		$uname = $_REQUEST['uname'];
		$psw = $_REQUEST['psw'];
		$psw = sha1($psw);
		if($ses_rank == "admin"){
			$check = mysqli_query($conn,"SELECT * FROM $users_students WHERE user_name = '$uname'");
			if(mysqli_fetch_assoc($check)){
				echo "<div class='wd100 alert-danger alert'>Student already exits.</div>";
			}else{
				$sql = mysqli_query($conn,"INSERT INTO $users_students (`user_name`,`password`,`school`) VALUES ('$uname','$psw','$school_code_sha1')");
				if($sql){
					echo "<div class='wd100 alert-success alert'>Student successfully created.</div>";
				}
			}
		}
	}
?>