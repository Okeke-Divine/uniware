<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/font/css/all.css?r=cache">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	 <link href="/css/main.css?r=cache" rel="stylesheet">
    <link href="/css/sweetalert.css?r-cahce" rel="stylesheet">
    <script type="text/javascript" src="/js/sweetalert.js?r-cahce"></script>
	<script type="text/javascript" src="/js/all.js"></script>
	<?php
	include("../conn.php");

	include("ses.php");
	if($logged_in == 0){
		?>
		<title><?php echo $site_name; ?> - Login</title>
		<?php
	}else{
	include("info.php");
	include("../conn.php");
	include("../css.php");
	include("../js.php");
	include("../function.php");
	include("function.php");
	include("scripts.php");


	?>
	<title><?php echo $site_name; ?> - <?php echo $ses_uname; ?></title>
	<meta charset="utf-8">
</head>
<body>
	
	<!-- MAO NI ANG HEADER -->
<?php include("includes/header.php"); ?>      

<!-- UI THEME DIRI -->
<?php include("includes/ui-theme.php"); ?>

<div class="app-main">
<!-- sidebar diri  -->
<?php include("includes/sidebar.php"); ?>

	<main class="container" role="main">
			
		<div class="app-main__outer">
		  <div class="app-main__inner">
				<div id="loading_machine">
					<div class="spinner-border text-info"></div>
				</div>
		    	<div id="ogkfofgdgd">
		    		
		    	</div>
		  </div>
		</div>

	</main>

</body>
</html>
<?php
				@$page = $_GET['page'];
				if($page == ""){
					?>
					<script type="text/javascript">load_page('home');</script>
					<?php
				}else{
					?>
					<script type="text/javascript">load_page('<?php echo $page; ?>');</script>
					<?php
				}
			?>
<?php include("includes/footer.php"); ?>
<?php
}
?>