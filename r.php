<?php

	if(isset($_POST['request'])){

		$sname = $_POST['sn'];
		$sc = $_POST['scode'];
		$a = $_POST['address'];
		$c = $_POST['country'];
		$s = $_POST['state'];

		if(empty($sname) || empty($sc) || empty($a) || empty($c) || empty($s)){
			header("location:request?required=true");
		}else{
			include("function.php");
			if(create_school() == "created"){
				header("location:request?registered=true&&code=$sc");
			}else{
				header("location:request?not_registered=true");
			}
		}

	}else{
		header("location:request");
	}

?>