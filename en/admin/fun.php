<?php

	class reg1{
		public static function teacher($tuname,$tpsw,$ses_scode){
			include("../conn.php");
			$query = mysqli_query($conn,"
					INSERT INTO $users_teachers (
`user_name` ,
`password` ,
`school`
)
VALUES ( '".$tuname."', SHA1( '".$tpsw."' ) , SHA1( '".$ses_scode."' )
)");
			if($query){
				return "success";
			}else{
				return "error";
			}
		}
		public static function student($suname,$spsw,$ses_scode){
			include("../conn.php");
			$query = mysqli_query($conn,"
					INSERT INTO $users_students (
`user_name` ,
`password` ,
`school`
)
VALUES ( '".$suname."', SHA1( '".$spsw."' ) , SHA1( '".$ses_scode."' )
)");
			if($query){
				return "success";
			}else{
				return "error";
			}
		}
	}

?>