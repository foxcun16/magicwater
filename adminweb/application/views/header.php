<!DOCTYPE html>
<html>
    <head>
        <title>Magic-Water Admin</title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link href="<?php echo base_url(); ?>/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo base_url(); ?>/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse"> 
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <!-- BEGIN NAVIGATION HEADER -->
                <div class="header-seperation"> 
                    <!-- BEGIN MOBILE HEADER -->
                    <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
                        <li class="dropdown">
                            <a id="main-menu-toggle" href="#main-menu" class="">
                                <div class="iconset top-menu-toggle-white"></div>
                            </a>
                        </li>		 
                    </ul>
                    <!-- END MOBILE HEADER -->
                    <!-- BEGIN LOGO -->	
                    <a href="#">
                        <img src="<?php echo base_url(); ?>/assets/img/logo.png" class="logo" alt="" data-src="<?php echo base_url(); ?>/assets/img/logo.png" data-src-retina="<?php echo base_url(); ?>/assets/img/logo2x.png" width="106" height="21"/>
                    </a>
                    <!-- END LOGO --> 
                    <!-- BEGIN LOGO NAV BUTTONS -->
                    <ul class="nav pull-right notifcation-center">	
                        <li class="dropdown" id="header_task_bar">
                            <a href="#" class="dropdown-toggle active" data-toggle="">
                                <div class="iconset top-home"></div>
                            </a>
                        </li>
                        <!-- BEGIN MOBILE CHAT TOGGLER -->
                        <li class="dropdown" id="portrait-chat-toggler" style="display:none">
                            <a href="#sidr" class="chat-menu-toggle">
                                <div class="iconset top-chat-white"></div>
                            </a>
                        </li>
                        <!-- END MOBILE CHAT TOGGLER -->				        
                    </ul>
                    <!-- END LOGO NAV BUTTONS -->
                </div>
                <!-- END NAVIGATION HEADER -->
                <!-- BEGIN CONTENT HEADER -->
                <div class="header-quick-nav"> 
                    <!-- BEGIN HEADER LEFT SIDE SECTION -->
                    <div class="pull-left"> 
                        <!-- BEGIN SLIM NAVIGATION TOGGLE -->
                        <ul class="nav quick-section">
                            <li class="quicklinks">
                                <a href="#" class="" id="layout-condensed-toggle">
                                    <div class="iconset top-menu-toggle-dark"></div>
                                </a>
                            </li>
                        </ul>
                        <!-- END SLIM NAVIGATION TOGGLE -->					
                    </div>
                    <!-- END HEADER LEFT SIDE SECTION -->
                    <!-- BEGIN HEADER RIGHT SIDE SECTION -->
                    <div class="pull-right"> 
                        <div class="chat-toggler">	
                            <!-- BEGIN NOTIFICATION CENTER -->
                            <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom" data-content="">
                                <div class="user-details"> 
                                    <div class="username">
                                        <span class="badge badge-important"></span>&nbsp;John<span class="bold">&nbsp;Smith</span>									
                                    </div>						
                                </div> 
                            </a>
                            <!-- END NOTIFICATION CENTER -->
                            <!-- BEGIN PROFILE PICTURE -->
                            <div class="profile-pic"> 
                                <img src="<?php echo base_url(); ?>/assets/img/profiles/avatar_small.jpg" alt="" data-src="<?php echo base_url(); ?>/assets/img/profiles/avatar_small.jpg" data-src-retina="<?php echo base_url(); ?>/assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> 
                            </div>  
                            <!-- END PROFILE PICTURE -->     			
                        </div>
                        <!-- BEGIN HEADER NAV BUTTONS -->
                        <ul class="nav quick-section">
                            <!-- BEGIN SETTINGS -->
                            <li class="quicklinks"> 
                                <a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">						
                                    <div class="iconset top-settings-dark"></div> 	
                                </a>
                                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">
                                    <li><a href="#">Change Password</a></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                            <!-- END SETTINGS -->
                            
                            <!-- BEGIN CHAT SIDEBAR TOGGLE -->
                            
                            <!-- END CHAT SIDEBAR TOGGLE --> 
                        </ul>
                        <!-- END HEADER NAV BUTTONS -->
                    </div>
                    <!-- END HEADER RIGHT SIDE SECTION -->
                </div> 
                <!-- END CONTENT HEADER --> 
            </div>
            <!-- END TOP NAVIGATION BAR --> 
        </div>
        <!-- END HEADER -->

        <!-- BEGIN CONTENT -->
        <div class="page-container row-fluid">
            <!-- BEGIN SIDEBAR -->
            <!-- BEGIN MENU -->
            <div class="page-sidebar" id="main-menu"> 
                <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
                    <!-- BEGIN MINI-PROFILE -->
                    <div class="user-info-wrapper">	
                        <div class="profile-wrapper">
                            <img src="<?php echo base_url(); ?>/assets/img/profiles/avatar.jpg" alt="" data-src="<?php echo base_url(); ?>/assets/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url(); ?>/assets/img/profiles/avatar2x.jpg" width="69" height="69" />
                        </div>
                        <div class="user-info">
                            <div class="greeting">Welcome</div>
                            <div class="username">John <span class="semi-bold">Smith</span></div>
                        </div>
                    </div>
                    <!-- END MINI-PROFILE -->
                    <!-- BEGIN SIDEBAR MENU -->	
                    <p class="menu-title">BROWSE<span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
                    <ul>	
                        <!-- BEGIN SELECTED LINK -->
                        <li class="start active">
                            <a href="#">
                                <i class="icon-custom-home"></i>
                                <span class="title">Home</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <!-- END SELECTED LINK -->
                        <!-- BEGIN BADGE LINK -->
                        <li class="">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span class="title">Members</span>
                            </a>
                        </li>
                        <!-- END BADGE LINK -->     
                        <!-- BEGIN SINGLE LINK -->
                        
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="title">Transaksi</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li ><a href="#">Order</a></li>
                                 <li ><a href="#">Konfirmasi Order</a></li>
                            </ul>
                        </li>
                        
                        <!-- END SINGLE LINK -->    
                        <!-- BEGIN ONE LEVEL MENU -->
                        <li class="">
                            <a href="javascript:;">
                                <i class="icon-custom-ui"></i>
                                <span class="title">Master Data</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li ><a href="#">Produk</a></li>
                                 <li ><a href="#">Users</a></li>
                            </ul>
                        </li>
                        <!-- END ONE LEVEL MENU -->
                        <!-- BEGIN TWO LEVEL MENU -->
                        <li class="">
                            <a href="#">
                                <i class="fa fa-phone"></i>
                                <span class="title">Kontak</span>
                            </a>
                        </li>
                        
                        <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-print"></i>
                                <span class="title">Laporan</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="javascript:;">Transaksi Penjualan</a></li>
                            </ul>
                        </li>
                        <!-- END TWO LEVEL MENU -->			
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <div class="clearfix"></div>
                    <!-- END SIDEBAR WIDGETS --> 
                </div>
            </div>
            