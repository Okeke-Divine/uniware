<?php

		$back_dir = "../";

	class admin{
		public static function verify($scode){
			include("../conn.php");
			$query = mysqli_query($conn,"UPDATE $schools SET verified = '1' WHERE school_code = '$scode'");
			if($query){
				return "saved";
			}else{
				return "not saved";
			}	
		}
		public static function find_reply($scode){
			include("../conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $schools WHERE school_code = '$scode' LIMIT 1");
			while($row = mysqli_fetch_assoc($query)){
				return $row['admin_considered'];
			}
		}

		public static function reply_school($scode,$cont){
			include("../conn.php");
			$query = mysqli_query($conn,"UPDATE $schools SET admin_considered = '$cont' WHERE school_code = '$scode'");
			if($query){
				return "saved";
			}else{
				return "not saved";
			}
		}
		public static function load_schools(){
			include("../conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $schools ORDER BY id DESC");
			$total = 0;
			while($row = mysqli_fetch_assoc($query)){
					$school_name = $row['school_name'];
					$total = $total + 1;
					$verified = $row['verified'];

					if($verified == 1){
						$verified = "Verified";
						$badge = "badge-success";
					}else if($verified == 0){
						$verified = "Pending | Not Verified";
						$badge = "badge-danger";
					}

					$country = $row['school_country'];
					$state = $row['school_state'];
					$school_code = $row['school_code'];
					$time = date("Y-M-D",$row['time']);
					?>

 <tr>
 <th scope="row"><?php echo $total; ?></th>
<td><?php echo $school_name; ?></td>
<td><?php echo $verified; ?></td>
<td><?php echo $country; ?></td>
<td><?php echo $state; ?></td>
<td><?php echo $time; ?></td>

<td>
	<div class="dropdown dropdown1 sijdi">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="?action=home&&view_school=<?php echo $school_code; ?>">View</a>
  </div>
</div> 
 </div>
</td>


</tr>
 
					<?php
				}
		}		
	}
	class security{
		public static function login($uname,$psw){
			if($uname == "admin" && $psw == "admin-password"){
				return "login";
			}else{
				return "no login";
			}
		}
	}
	class all{
		public static function view_school($code){
			include("../conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $schools WHERE school_code = '$code' and deleted = '0' limit 1");
			$total = 0; 
			while($row = mysqli_fetch_assoc($query)){
					$total = $total + 1; 
					$school_name = $row['school_name'];
					$verified = $row['verified'];
					$school_code = $row['school_code'];
					$time = date("Y-M-D",$row['time']);
					?>

						<div class="tab-content">
              <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
         <div class="main-card mb-3 card">
             <div class="card-body"><h5 class="card-title"><?php echo $school_name; ?></h5>
             	<span>Created on : <?php echo $time; ?></span>
             	<?php

             	if($verified == 0){
             		?>

             		<br>
             		<button onclick="window.location = '?action=verify&&school=<?php echo $school_code; ?>&&name=<?php echo $school_name; ?>';" class="shiftdown btn btn-info">Reply</button>
             		<button onclick="window.location='?action=verify_main&&school=<?php echo $school_code; ?>&&name=<?php echo $school_name; ?>';" class="shiftdown btn btn-success">Verify</button>

             		<?php
             	}else{
             		?>
             		<br>
             		<button class="shiftdown btn btn-info">Verified</button>
             		<?php
             	}

             	?>
             </div>
         </div>
     </div>
 </div>

					<?php

				}
				if($total == 0){
					echo write::alert_error('School not found.');
				}
		}
		public static function check_school($code){
			include("../conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $schools WHERE school_code = '$code' and deleted = '0' limit 1");
			if(mysqli_fetch_assoc($query)){
				return "available";
			}else{
				return "not available";
			}
		}
	}


?>