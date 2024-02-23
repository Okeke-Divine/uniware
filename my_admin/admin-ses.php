<?php

if(isset($_SESSION['admin_uname_uniware'])){
	$ses_admin = $_SESSION['admin_uname_uniware'];
}else{
	header("location:?action=login");
}
	
?>