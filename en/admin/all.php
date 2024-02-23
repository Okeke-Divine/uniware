<br>
<main class="container" role="main">
	<?php

	if(isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == "add-teacher"){
			if(isset($_POST['reg-tech'])){
				$tuname = $_POST['tuname'];
				$tpsw = $_POST['tpsw'];
				if(empty($tuname) || empty($tpsw)){
					echo write::alert_error(required::all_fields());
				}else{
					include("fun.php");
					if(reg1::teacher($tuname,$tpsw,$ses_scode) == "success"){
						echo write::alert_success('Teacher was registered');
					}else{
						echo write::alert_error('Teacher was not registered');
					}
				}
			}

			?>
				<h3>Add a teacher to <?php echo $school_name; ?></h3>
				<form class="form-center" action="" method="POST">
					<label for="tuname">Teacher's Fullname/Username</label>
					<input type="text" name="tuname" class="form-control" id="tuname" placeholder="Teacher's Fullname/Username" required="">
					<label for="tpsw">Teacher's Password</label>
					<input type="password" name="tpsw" class="form-control" id="tpsw" placeholder="Teacher's Passsword" required="">
					<button class="mt btn btn-primary" name="reg-tech">Register</button>
				</form>
			<?php
		}
	}
	if(isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == "add-student"){
				if(isset($_POST['reg-stu'])){
				$suname = $_POST['suname'];
				$spsw = $_POST['spsw'];
				if(empty($suname) || empty($spsw)){
					echo write::alert_error(required::all_fields());
				}else{
					include("fun.php");
					if(reg1::student($suname,$spsw,$ses_scode) == "success"){
						echo write::alert_success('Stundent was registered');
					}else{
						echo write::alert_error('Stundet was not registered');
					}
				}
			}

			?>
				<h3>Add a student to <?php echo $school_name; ?></h3>
				<form class="form-center" action="" method="POST">
					<label for="suname">Student's Fullname/Username</label>
					<input type="text" name="suname" class="form-control" id="suname" placeholder="Student's Fullname/Username" required="">
					<label for="spsw">Student's Password</label>
					<input type="password" name="spsw" class="form-control" id="spsw" placeholder="Student's Passsword" required="">
					<button class="mt btn btn-primary" name="reg-stu">Register</button>
				</form>
			<?php
		}
		if($action == "database"){
			?>
			 <table class="mb-0 table">
		<thead>
		<tr>
		  <th>id</th>
		<th>Name</th>
		</tr>
			<tr>
 				<td>1</td>
				<td><a href="?page=admin&&action=table&&name=students">Students</a></td>
			</tr>
			<tr>
 				<td>2</td>
				<td><a href="?page=admin&&action=table&&name=teachers">Teachers</a></td>
			</tr>
		</thead>
		<tbody> 


		</tbody>
		</table>
			<?php
		}
	}

	?>
</main>