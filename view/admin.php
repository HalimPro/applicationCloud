<?php 
include_once("navBarAdmin.php");
include_once("../model/user.php");
include_once("../model/user.php");

$user=new User();
$user=new User();

?>
<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/smarthr/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 31 Mar 2018 08:58:27 GMT -->
<head>
        <title></title>
    </head>
    <body> 
       
 
		    
					<div class="row" style="width: 80%;margin: auto;padding-top: 5%;">
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3><?= $user->NombreMembresValides($conn) ?></h3>
									<span>Membres validés</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3><?= $user->NombreMembresRefuse($conn) ?></h3>
									<span>Membres refusés</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"></span>
								<div class="dash-widget-info">
									<h3>37</h3>
									<span>Documents</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"></span>
								<div class="dash-widget-info">
									<h3>218</h3>
									<span>commentaires</span>
								</div>
							</div>
						</div>
					</div>
		
					 
					 
		 
        
		 
  </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 31 Mar 2018 08:58:40 GMT -->
</html>