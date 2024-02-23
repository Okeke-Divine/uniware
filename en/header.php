<?php

	$page = $_GET['page'];

?>
<nav class="navbar bg-light">
	<h4 onclick="window.history.back()" title="Click me to go to your previous page" class="pointer"><?php echo ucfirst($ses_uname); ?></h4>
	<span class="right">
		<button class="btn <?php if($page == 'home'){echo 'btn-success';}else{echo 'btn btn-outline-success';} ?>" onclick="window.location = '?page=home';">Home</button>
		<button class="btn <?php if($page == 'logout'){echo 'btn-success';}else{echo 'btn btn-outline-success';} ?>" onclick="window.location = '?page=logout';">Logout</button>
	</span>
</nav>