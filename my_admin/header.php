<?php
	
	$action = $_GET['action'];

?>
	<nav class="navbar bg-light">
			<h4><?php echo $site_name; ?> - Admin</h4>

			<button class="btn <?php if($action == "home"){echo "btn-primary";}else{echo 'btn-outline-primary';} ?>" onclick='window.location ="?action=home";'>Home</button>

	</nav>