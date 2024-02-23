<?php

	class s{
		public static function school_admin($scode){
			include("conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $users_admin WHERE school_code = SHA1 ('".$scode."')");
			if(mysqli_fetch_assoc($query)){
				$style = "<style>form{
				display: none!important;
				}</style>";
				return write::alert_info('School already has an admin').$style;	
			}
		}
		public static function reg_info($scode){
			include("conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $schools WHERE school_code = '$scode' and verified = '1' limit 1");
			if(!mysqli_fetch_assoc($query)){
				$style = "<style>form{
				display: none!important;
			}</style>";
				return write::alert_info('School was not found or is not verified').$style;
			}
		}
	}

	class uniware{
		public static function user($a){
			return $a;
		}
		public static function generate_string( $total =  6) 
	{
		$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$pass = substr( str_shuffle( $string ), 0, $total );
		
		return $pass;
	}
	
	}
	

	function create_school(){
		include("conn.php");
		$sname = $_POST['sn'];
		$sc = $_POST['scode'];
		$a = $_POST['address'];
		$c = $_POST['country'];
		$s = $_POST['state'];
		$register = mysqli_query($conn,"INSERT INTO `schools` (`id`, `school_name`, `school_code`, `school_address`, `school_country`, `school_state`, `verified`, `blocked`, `deleted`, `time`,`admin_considered`) VALUES (NULL, '".$sname."', '".$sc."', '".$a."', '".$c."', '".$s."', '0', '0', '0', UNIX_TIMESTAMP(),'');");
		if($register){
			$c = "created";
			return $c;
		}else{
			$c = "not created";
			return $c;
		}

			

	}


	class school{


		public static function mfa($table_name,$row_name,$item){
			include("conn.php");
		}

		public static function load($school_code){
			include("conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $schools WHERE school_code = '$school_code' and deleted = '0' limit 1");
			if(mysqli_fetch_assoc($query)){
				$query = mysqli_query($conn,"SELECT * FROM $schools WHERE school_code = '$school_code' and deleted = '0' limit 1");
				while($row = mysqli_fetch_assoc($query)){
					$school_name = $row['school_name'];
					$verified = $row['verified'];

					if($verified == 1){
						$verified = "Verified | You can now register with your school code";
						$badge = "badge-success p-2";
						$btn = "<button class='btn btn-dark'>Register</button>";
					}else if($verified == 0){
						$verified = "Pending | Not Verified";
						$badge = "badge-danger p-2";
						$btn = "";
					}

					$school_code = $row['school_code'];
					$time = date("Y-M-D",$row['time']);
					$ac = $row['admin_considered'];
					if(empty($ac)){
						$ac = "No reply";
					}else{
						$ac = ucfirst($ac);
					}


					$def_code = 'School Code : <span class="form-control extra_control">'.$school_code.'</span> <span class="text-info"><- Please copy this code to have access to your <b>school</b></span>';

					$result = ' <div class="col-md-12">
<div class="main-card mb-3 card">
<div class="card-body"><h5 class="card-title">'.$school_name.'</h5>
<div class="row">
<div class="col">
<ul class="nav flex-column">
<li class="nav-item"><a href="javascript:void(0);" class="nav-link">Status
 <div class="ml-auto badge '.$badge.'">'.$verified.'</div>
 </a></li>

 <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled">'.$def_code.'</a></li>

 <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled">Date Submitted : '.$time.'

 <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled">Admin message : '.$ac.'</li>
 
  </ul>
</div> 
 </div>
 </div>
 </div></div>
 ';
 					return $result;
				}
			}else{
				return write::alert_error('School does not exit');
			}
		}
	}

	class write{
		public static function alert_error($text){
			$error = "<div class='alert alert-danger'>".$text."</div>";
			return $error;
		}
		public static function alert_info($text){
			$error = "<div class='alert alert-info'>".$text."</div>";
			return $error;
		}
		public static function alert_success($text){
			$error = "<div class='alert alert-success'>".$text."</div>";
			return $error;
		}
	}
	/*class error{
		public static function fun_404(){
			echo "404.";
		}
	}*/
	class required{
		public static function all_fields(){
			return "All fields are required";
		}
	}
?>

