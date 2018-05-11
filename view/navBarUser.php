<?php
include_once("../config/config.php"); 
session_start();
$id_user=$_SESSION['id_user'];

if(!isset($id_user)){
	header("location:../view");
}
include_once("../model/user.php"); 
$user = new User();
$info=$user->afficherInfoUser($conn,$id_user);

?>
<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/smarthr/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 31 Mar 2018 08:58:27 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Dashboard - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/plugins/morris/morris.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
       <div class="header">
               
                <div class="page-title-box pull-left">
					<h3>stock_Drive</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					<li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="media-list">
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">
													<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
												</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="m-0"><span class="notification-time">4 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="m-0"><span class="notification-time">6 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">L</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="m-0"><span class="notification-time">8 mins ago</span></p>
											</div>
										</a>
									</li>


 
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>

					<li class="dropdown hidden-xs">
						<a href="espace.php"   class="hasnotifications">Espace</a>
					</li>

					<li class="dropdown hidden-xs">
						<a href=""   class="hasnotifications">Forum</a>
					</li>


					<li class="dropdown">
						 

						<a  href="#" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							 
							 
							<span>Document</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="document.php">Document</a></li>
							<li><a href="mesdocument.php">mes Document</a></li>
							 
						</ul>

					</li>

					<li class="dropdown">
						<a  href="#" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							 
							 
							<span>formation</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="formation.php">formations</a></li>
							<li><a href="mesformation.php">mes formations</a></li>
							 
						</ul>
					</li>



					
					<li class="dropdown">
						<a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="<?= $info['nom'] ?>">
							<span class="user-img"><img class="img-circle" src="../assets/img/user.jpg" width="40" >
							<span class="status online"></span></span>
							<span><?= $info['nom'] ?></span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profileUser.php">My Profile</a></li>
							<li><a href="editUser.php">Modifier profil</a></li>
							<li><a href="../config/dex.php">Deconexion</a></li>
						</ul>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="profileUser.php">My Profile</a></li>
						<li><a href="editUser.php">Modifier profil</a></li>
						<li><a href="../config/dex.php">Deconexion</a></li>
					</ul>
				</div>
            </div>



        </body>


            
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="../assets/plugins/morris/morris.min.js"></script>
		<script type="text/javascript" src="../assets/plugins/raphael/raphael-min.js"></script>
		<script type="text/javascript" src="../assets/js/app.js"></script>

            </html>