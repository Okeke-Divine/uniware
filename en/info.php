<?php

	$info = mysqli_query($conn,"SELECT * FROM $schools WHERE school_code = '$ses_scode'");
	while($row = mysqli_fetch_array($info)){
		$school_name = $row['school_name'];
		$school_code = $row['school_code'];
		$school_code_sha1 = sha1($row['school_code']);
	}
?>