<?php

	function home_profile($rank){

			

	}
	function get_side_controls($rank){
		if($rank == "admin"){
            // if user is an admin
			?>
				<li>
                    <a href="javascript:void(0)" onclick="load_page('add-teacher');">
                     <i class="fa fa-user-plus"></i> Add Teacher
					</a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="load_page('add-student');">
                     <i class="fa fa-user-plus"></i> Add Student
					</a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="load_page('database');">
                     <i class="fa fa-database"></i> Database
					</a>
                </li>
			<?php
		}
		if($rank == "teacher" or $rank == "student"){
            // if user is a teacher or student
			?>
				<li>
                    <a href="javascript:void(0)" onclick="load_page('create-class');">
                     <i class="fa fa-plus"></i> Create Class
					</a>
                </li>
                 <li>
                    <a href="javascript:void(0)" onclick="load_page('join-class');">
                     <i class="fa fa-users"></i> Join Class
                    </a>
                </li>
                 <li>
                    <a href="javascript:void(0)" onclick="load_page('classes');">
                     <i class="fa fa-chalkboard"></i> Classes
                    </a>
                </li>
			<?php
		}
        if($rank == "teacher"){
            // if user is a teacher
            ?>
               
            <?php
        }
        if($rank == "student"){
            // if user is a student
            ?>
               
            <?php
        }
	}
	function title($title,$icon){
		?>
		<div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="<?php echo $icon; ?> icon-gradient bg-malibu-beach"></i>
                    </div>
                    <div><?php echo $title; ?>
                                        <!-- <div class="page-title-subheading"><?php echo $description; ?>
                                        </div> -->
                    </div>
                </div>
            </div>
        </div>
		<?php
	}
    function get_table_actions($id){
        ?>
        <!-- <a href="javascript:void(0)">Browse</a> -->
        <?php
    }
    function get_num_rows($item){

        include("../../conn.php");
        include("ses.php");
        include("info.php");
        if($item == "teacher"){
            $sql = mysqli_query($conn,"SELECT * FROM $users_teachers WHERE school = '$ses_scode'");
        }else if($item == "student"){
            $sql = mysqli_query($conn,"SELECT * FROM $users_students WHERE school = '$ses_scode'");
        }

        return mysqli_num_rows($sql);

    }
    function load_home($rank){
        include("../../conn.php");
        include("ses.php");
        include("info.php");
        ?>
        <!-- load school info -->
        <div class="wd100 bg-white shadow-sm p-2 mb-3">
            <?php echo $school_name; ?> - <?php echo $ses_uname; ?>
        </div>
        <!-- close school info -->
        <?php
        if($rank == "admin"){
            load_admin_home();
        }
    }
    function load_admin_home(){
        ?>
        <!-- load teacehrs -->
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading"><i class="fa fa-user"></i> Teacher</div>
                    <div class="widget-subheading">Total teachers in this school.</div>
                </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span></span><?php echo get_num_rows('teacher'); ?></div>
                    </div>
                </div>
        </div>
        <!-- close teachers -->
        <!-- load students -->
        <div class="card mb-3 widget-content bg-premium-dark">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                                            <div class="widget-heading"><i class="fa fa-graduation-cap"></i> Student</div>
                                            <div class="widget-subheading">Total students in this school.</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-warning"><span><?php echo get_num_rows('student'); ?></span></div>
                </div>
            </div>
        </div>
        <!-- close students -->
        <?php
    }
?>