<!DOCTYPE html>
<html>
<head>
	<?php

	include("css.php");
	include("js.php");
	include("function.php");
	include("conn.php");
	include("header.php");

	?>
	<title>Request - Uniware</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/prism.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
</head>
<body>


<main class="container" role="main">
	
  <?php


  if(isset($_GET['registered'])){
    // request sent
    ?>
<br>
    <div class="alert alert-info">
      Your request has been sent and will be attended to.
      <br>
      <i class="fa fa-pulse fa-spinner"></i> Please wait you will be redirect to your admin page in less 10 seconds.
    </div>
    <script type="text/javascript">
      setTimeout(redir,9000);
      function redir(){
        window.location = 'school-admin?school=<?php echo $_GET['code']; ?>';
      }
    </script>

    <?php


  }else if(isset($_GET['not_registered'])){
    // request not sent
    ?>
    <br>
    <div class="alert alert-danger">
      Your request was not sent please try again.
    </div>
    <?php
    include("void/request.php");
  }else{
    // page load default
    ?>
    <br>
    <?php
    include("void/request.php");
  }


  ?>

</main>


</body>
</html>

<script type="text/javascript">
	_('scode').value = "<?php echo uniware::generate_string(10); ?>";
</script>