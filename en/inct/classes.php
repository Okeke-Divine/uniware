<?php
	include("index.php");
	if($ses_rank == "teacher" or $ses_rank == "student"){}else{die();}
	include("../../css.php");
    title('<b>Classes</b>','fa fa-chalkboard');

?>

	<?php

	$check_class = mysqli_query($conn,"SELECT * FROM $class_info WHERE school = '$school_code_sha1' and user_id = '$ses_id' and user_rank = '$ses_rank'");
	if(mysqli_num_rows($check_class)>0){
		?>
			<h6 class="text-primary defmigfe">My class</h6>
			<hr>
			<main class="container" role=",main">
		<?php
	}
	echo "<div class='row'>";
	while($row = mysqli_fetch_assoc($check_class)){
		$class_name = $row['class_name'];
		$class_background = $row['class_background'];
		$class_code = $row['class_code'];
		?>
		 <div class="card mb-3 widget-content mr-2 <?php echo $class_background; ?>">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <h4 class="widget-heading"><?php echo $class_name; ?></h4>
                    <h6 class="widget-subheading"><?php echo $class_code; ?></h6>
                </div>
           
                </div>
        </div>
		<?php
	}
	echo "</div>";
	echo "</main>";
	?>

<h6 class="text-primary defmigfe">classes</h6>