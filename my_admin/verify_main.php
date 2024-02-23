<?php
if(isset($_GET['school'])){

	$school = $_GET['school'];
	if(empty($school)){
	
		error::fun_404();

	}else{
		$school_name = $_GET['name'];
		if(isset($_GET['yes'])){
			$school = $_GET['school'];
			if(admin::verify($school) == "saved"){
				header("location:?action=home");
			}else{
				echo write::alert_error('Not verified');
			}
		}else{
?>

<div class="cards_def wd100">
<h3>
	Are you sure you want to verify this school?
</h3>
<button class="btn btn-outline-primary" onclick="yes();">Yes</button>
<button class="btn btn-danger" onclick="back()">No</button>
</div>
<?php
}
}
}
else{
	error::fun_404();
}
?>
<script type="text/javascript">
	function yes(){
		window.location = '?action=verify_main&&school=<?php echo $school; ?>&&name=<?php echo $school_name; ?>&&yes=true';
	}
</script>