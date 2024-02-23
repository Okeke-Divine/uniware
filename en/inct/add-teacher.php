<?php

	include("index.php");
    title('<b>Add Teacher</b>','fa fa-user-plus');

?>
<div id="errors" class="wd100"></div>
<div id="success" class="wd100"></div>
<form method="POST">
	<label name="uname">Teacher Full Name</label>
	<input type="text" name="uname" id="uname" placeholder="Enter Teacher Full Name..." class="form-control">
		<button  id="eye" type="button" onclick="viewer_password()" class="btn btn fa fa-eye viewer_password"></button>
	<label name="psw" class="mt-2">Teacher Password</label>
		<input type="password" oninput="show_view_password()" name="psw" id="psw" placeholder="Enter Teacher Password..." class="form-control">
	<div class="wd100 mt-3">
		<button id="reg" type="button" onclick="register('teacher');" class="right btn p-1 btn fa-1x btn-info"><i class="fa fa-user-plus"></i> Register Teacher</button>
	</div>
</form>