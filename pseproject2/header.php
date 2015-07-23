<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/title.png">

        <title>Rendezvous</title>

        <!-- Google-Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">
        <!--Animation css-->
        <link href="css/animate.css" rel="stylesheet">
        <!-- sweet alerts -->
        <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">
        <!--Icon-fonts css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/helper.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet" />	
		
		<script src="js/jquery.js"></script>		
		
    </head>

<?php
include_once "functions.php";
$ERROR ='';
session_start();
require_once "php/db_connect.php";
if(@$_SESSION['id'] !== null){
$userData = getUserData($_SESSION['id']);
	
?>

<body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="index.php" class="logo-expanded">
                    <img src="img/single-logo.png" alt="logo">
                    <span class="nav-label">Rendezvous</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">     
					<li ><a href="index.php"><i class="ion-home"></i> <span class="nav-label">Home</span></a>
                    <li class="has-submenu"><a href="#"><i class="ion-navicon-round"></i> <span class="nav-label">Activities</span></a>
                        <ul class="list-unstyled">
                            <?php activites('act',0);?>
                        </ul>
                    </li>
                    <li class="has-submenu active"><a href="#"><i class="ion-navicon-round"></i> <span class="nav-label">My Activities</span></a>
                        <ul class="list-unstyled">
                            <?php activites('act',$_SESSION['id']);?>
                        </ul>
                    </li>
					<li class="has-submenu"><a href="#"><i class="ion-person"></i> <span class="nav-label">My Events</span></a>
                        <ul class="list-unstyled">
                            <?php myEvents($_SESSION['id']);?>
                        </ul>
                    </li>
                    <li class="has-submenu"><a href="#"><i class="ion-person-stalker"></i> <span class="nav-label">Joined Events</span></a>
                        <ul class="list-unstyled">
                            <?php joinedEvents($_SESSION['id']);?>
                        </ul>
                    </li>
					<li>
                    <a href="calendar.php"><i class="ion-calendar"></i> <span class="nav-label">Calendar</span></a>
                    </li>
					<li>
					<a href="gmap.php"><i class="ion-location"></i> <span class="nav-label">Maps</span></a>
                    </li>
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- Search -->
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input type="text" placeholder="Search..." class="form-control">
                </form>
               
                
                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                    <!-- mesages -->  
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o "></i>
                            <span class="badge badge-sm up bg-purple count">4</span>
                        </a>
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                            <li>
                                <p>Messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="img/avatar-2.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="img/avatar-3.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><img src="img/avatar-4.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                    <span class="block"><strong>John smith</strong></span>
                                    <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <p><a href="inbox.html" class="text-right">See all Messages</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /messages -->
                    <!-- Notification -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge badge-sm up bg-pink count">3</span>
                        </a>
                        <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                            <li class="noti-header">
                                <p>Notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                    <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                    <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                    <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                                </a>
                            </li>
                            
                            <li>
                                <p><a href="#" class="text-right">See all notifications</a></p>
                            </li>
                        </ul>
                    </li>
                    <!-- /Notification -->

                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                            <span class="username"><?php echo $userData[1];?></span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            <li><a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
                </ul>
                <!-- End right navbar -->
            </header>
            <!-- Header Ends -->
<?php
	} else {
?>
<body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="index.php" class="logo-expanded">
                    <img src="img/single-logo.png" alt="logo">
                    <span class="nav-label">Rendezvous</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">     
					<li ><a href="index.php"><i class="ion-home"></i> <span class="nav-label">Home</span></a>
                    <li class="has-submenu active"><a href="#"><i class="ion-navicon-round"></i> <span class="nav-label">Activities</span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">Football</a></li>
                            <li><a href="#">Baseball</a></li>
                            <li><a href="#">Soccer</a></li>
                            <li><a href="#">Swimming</a></li>
                            <li><a href="#">Tennis</a></li>
                            <li><a href="#">Running</a></li>
                            <li><a href="#">Lifting Weights</a></li>
                            <li><a href="#">Yoga</a></li>
                            <li><a href="#">Volleyball</a></li>
                            <li><a href="#">Basketball</a></li>
                        </ul>
                    </li>
                    <li>
					<a href="calendar.php"><i class="ion-calendar"></i> <span class="nav-label">Calendar</span></a>
                    </li>
					<li>
					<a href="gmap.php"><i class="ion-location"></i> <span class="nav-label">Maps</span></a>
                    </li>
                    
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->

     <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- Search -->
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input type="text" placeholder="Search..." class="form-control">
                </form>
               
               
                
                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                   <div class="pull-right">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle btn btn-primary" href="#">Sign In <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="login.php">Sing In</a></li>
                                        <li class="divider"></li>
                                        <li><a href="registration.php">Register</a></li>
                                    </ul>
                                </div>
                              </div>                   
            </header>
            <!-- Header Ends -->

<?php		
}
?>

<!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>  
        <script src="js/jquery.app.js"></script>
