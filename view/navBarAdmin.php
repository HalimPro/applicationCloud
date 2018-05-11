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

echo $id_user;
?>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
        <title><?= $info['nom'] ?></title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/plugins/summernote/dist/summernote.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

 <div class="header">
               
                <div class="page-title-box pull-left">
					<h3>stock_Drive</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
				 
					<li class="dropdown hidden-xs">
						<a href="userInscription.php" ><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>
						 
					</li>
					 
					<li class="dropdown hidden-xs">
						<a href="admin.php"   class="hasnotifications">Statistique</a>
					</li>
					<li class="dropdown hidden-xs">
						<a href="adminEspace.php"   class="hasnotifications">Espace</a>
					</li>
					<li class="dropdown hidden-xs">
						<a href="adminFormation.php"   class="hasnotifications">Formations</a>
					<li class="dropdown">
						<a  href="#" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							 
							 
							<span>Membres</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu"> 
							<li><a href="validerUser.php">Membres validé</a><li><a href="refuseUser.php">Membres réfusé</a></li>
							 
						</ul>
					</li>
						
					<li class="dropdown">
						<a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span><?= $info['nom']." ".$info['prenom'] ?></span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							
							
					
						<li><a href="../config/dex.php">Deconexion</a></li>
						</ul>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						
						<li><a href="../config/dex.php">Deconexion</a></li>
					</ul>
				</div>
            </div>


            	<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="../assets/js/select2.min.js"></script>
		<script type="text/javascript" src="../assets/js/moment.min.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="../assets/js/app.js"></script>
		<script type="text/javascript" src="../assets/plugins/summernote/dist/summernote.min.js"></script>
        <script>
		$(document).ready(function(){
			$('.summernote').summernote({
				height: 200,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: false                 // set focus to editable area after initializing summernote
			});
		});
        </script>