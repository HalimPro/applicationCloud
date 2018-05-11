<html>
     
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Connecter à Stock_Drive</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body style="background-image: url(../images/vps-hosting.png);background-repeat: no-repeat;background-size: 650px ;">



        <div class="main-wrapper" style="background: rgba(0,0,0,0.5);height: 100%;position: fixed;width: 100%;">


			<div class="account-page"  style="overflow: hidden;">
					<br> 
					<div class="account-box" style="float: right;margin-right: 20%;">

						<div  >

						<div>
							<div class="account-logo">

								<h4 style="color:DodgerBlue;" class="account-title">Connecter à Stock_Drive</h4>
								<a href="index.html"><img src="../images/logo.svg" alt="Focus Technologies"></a>
							</div>
							<form  Float:right; action="../controller/login.php" method="POST">
								<div class="form-group form-focus">
									<label class="control-label">login</label>
									<input class="form-control floating" type="email" name="email" placeholder="email" required>
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Password</label>
									<input class="form-control floating" type="password" name="password" placeholder="password" required>
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary btn-block account-btn" type="submit" name="loginUser">Login</button>
								</div>


								<?php  if (isset($_REQUEST['message_error'])) { ?>


								<div class="text-center" style="padding:20px; background: red;color: white;">
									<b>Vérifier votre cordonnées...</b>
								</div>

								<?php } ?>
								<div class="text-center">
									<a href="forgot-password.html">oublier mot de passe?</a>
								</div>
							</form>
						</div>
					</div>







				
			</div>


        </div>





		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 31 Mar 2018 08:58:49 GMT -->
</html>