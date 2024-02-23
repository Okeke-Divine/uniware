<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
	

echo "<span style='display:none;'>";
session_start();
$ses_uname = $_SESSION['sclass_uname'];
$ses_id = $_SESSION['sclass_id'];
$ses_psw = $_SESSION['sclass_psw'];
$ses_scode = $_SESSION['sclass_scode']; 
$ses_rank = $_SESSION['sclass_rank'];
echo "</span>";

	if(empty($ses_uname) || empty($ses_id) || empty($ses_psw) || empty($ses_scode) || empty($ses_rank)){
				$logged_in = 0;
			?>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
	display: block;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; 
  left: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  animation: 1s slideIn;
}
@keyframes slideIn{
	from{opacity: 0;}
	to{opacity: 1;}
}
/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>You are not logged in. Login to your account to continue.
    	<br>
    	<button class="btn btn-success" onclick="window.location = '../select-login';">Login</button>
    </p>
  </div>

</div>


			<?php
	}else{
		$logged_in = 1;
	}

?>