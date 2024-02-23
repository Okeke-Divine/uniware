<br>
<form action="" method="POST">

	<?php

	if(isset($_GET['result'])){
		$result = $_GET['result'];
		if($result == "login_failed"){
			echo write::alert_error('Wrong Password and Username!');
		}else{
			echo write::alert_error('All fields are required!');
		}
	}

	?>

	<main class="container" role="main">
		<h4>Login</h4>
		<input type="text" name="uname" placeholder="Username..." class="form-control" required="">
		<br>
		<input type="password" name="psw" placeholder="Password..." class="form-control" required="">
		<br>
		<button class="btn btn-primary">Login</button>
	</main>
</form>
<?php

	if(isset($_POST['uname'],$_POST['psw'])){
		$uname = $_POST['uname'];
		$psw = $_POST['psw'];
		if(empty($uname) || empty($psw)){
			header("location:?action=login&&result=login_err");
		}else{
			if(security::login($uname,$psw) == "login"){

				$_SESSION['admin_uname_uniware'] = "permission_granted";
				header("location:?action=home");

			}else{
				header("location:?action=login&&result=login_failed");
			}
		}
	}

?>