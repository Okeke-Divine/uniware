<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

         
                <li class="app-sidebar__heading"><?php echo $ses_rank; ?>
                <li>
                <a href="#">
                    <i class="fa fa-desktop"></i>
                    Accessability
                    <i class="metismenu-state-icon caret-left fa fa-angle-down"></i>
                </a>
                <ul >
                    <li>
                        <a href="javascript:void(0)" onclick="load_page('home');">
                         <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                   <?php get_side_controls($ses_rank); ?>

                </ul>
                </li>


                <!-- <li class="app-sidebar__heading">FEEDBACKS</li> -->
                    <!-- <a href="#" data-toggle="modal" data-target="#feedbacksModal" >
                        Add Feedbacks                        
                    </a> -->
                
            </ul>
            <ul class="vertical-nav-menu">
         
                <li>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    Settings
                    <i class="metismenu-state-icon caret-left fa fa-angle-down"></i>
                </a>
                <ul >
                    <li>
                        <a href="javascript:void(0)" onclick="load_page('change-password');">
                         <i class="fa fa-lock"></i> Change Password
                        </a>
                    </li>

                </ul>
                </li>

                
            </ul>
        </div>
    </div>
</div>  