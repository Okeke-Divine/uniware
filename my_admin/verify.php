<br>
<?php

	if(isset($_GET['school'])){
		$school = $_GET['school'];
		$school_name = $_GET['name'];
		if(all::check_school($school) == "available"){

			?>
			
			<h3><?php echo $school_name; ?></h3>
			<form action="" method="POST">
			<textarea class="form-control" rows="10" placeholder="Reply..." id="rep" required="" name="content"></textarea>
			<br>
			<button class="btn btn-primary">Send</button>
			</form>
			<?php
			if(isset($_POST['content'])){
				$content = $_POST['content'];
				if(empty($content)){
					echo write::alert_error('Content cannot be empty');
				}else{
					if(admin::reply_school($school,$content) == "saved"){
						header("location:?action=home");
					}else{
						echo write::alert_error('Message not sent!');
					}
				}
			}
		}else{
			echo write::alert_error('School not found.');
		}
	}

?>

<script type="text/javascript">
				_('rep').value = "<?php echo admin::find_reply($school); ?>";
</script>