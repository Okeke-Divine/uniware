
<?php

	class schools{
		public static function reg_info($uname,$psw,$scode,$email,$phn){
			include("conn.php");
			$query = mysqli_query($conn,"
					INSERT INTO $users_admin (
`id` ,
`username` ,
`password` ,
`school_code` ,
`email` ,
`phone_number`
)
VALUES (
NULL , '".$uname."', SHA1( '".$psw."' ) , SHA1( '".$scode."' ) , '".$email."', '".$phn."'
);
				");
			if($query){
				return "success";
			}else{
				return "error";
			}
		}

		public static function login($uname,$psw,$scode){

			include("conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $users_admin WHERE username = '".$uname."' && password = SHA1 ('".$psw."') && school_code = SHA1('".$scode."') ");
			if(mysqli_fetch_assoc($query)){
				return "success";
			}

		}
		public static function login_s($uname,$psw,$school){

			include("conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $users_students WHERE user_name = '".$uname."' && password = SHA1 ('".$psw."') && school = SHA1 ('".$school."')");
			if(mysqli_fetch_assoc($query)){
				return "success";
			}

		}
		public static function login_t($uname,$psw,$school){

			include("conn.php");
			$query = mysqli_query($conn,"SELECT * FROM $users_teachers WHERE user_name = '".$uname."' && password = SHA1 ('".$psw."') && school = SHA1 ('".$school."')");
			if(mysqli_fetch_assoc($query)){
				return "success";
			}

		}
	}

?>