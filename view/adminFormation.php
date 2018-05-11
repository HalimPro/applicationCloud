<?php 
include_once("navBarAdmin.php");
include_once("../model/formation.php");


$formation = new Formation();

$geteformation=$formation->afficherInfoFormation($conn);





?>
<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/smarthr/blue/projects.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 31 Mar 2018 08:58:51 GMT -->
<head>
    
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            
             
            <div class="page-wrapper" style="margin: 0;">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">liste des formations</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30" >
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i>Alimenter</a>
						 
						</div>
					</div> 


					<center>
						<div class="col-sm-3 col-xs-6" style="margin: auto;margin-left: 40%;">  
							<div class="form-group form-focus" >
								<label class="control-label">Recherche</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
					</center>


					<br><br><br><br><br><br>
						 
					 
						   
					<div class="row">


<?php while ($getformationinfo=mysqli_fetch_assoc($geteformation)) { ?>
						<div class="col-lg-3 col-sm-4">
							<div class="card-box project-box">
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="../controller/formation.php?id_Modifier=<?= $getformationinfo['id_for'] ?>" ><i class="fa fa-pencil m-r-5"></i> Modifier</a></li>
										<li><a href="../controller/formation.php?id_Supprimer=<?= $getformationinfo['id_for'] ?>"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a></li>
									</ul>
								</div>
								<h4 class="project-title"><a href="project-view.html"><?= $getformationinfo['titre'] ?></a></h4>
							 
								<p class="text-muted"><?= $getformationinfo['discription'] ?>
								</p><a href="../fichier/<?= $getformationinfo['fichier'] ?>">
									<button style="border:0;padding: 10px;border-radius: 8px;box-shadow: 0px 2px 5px rgba(0,0,0,0.3);background-image: linear-gradient( 135deg, #6B73FF 10%, #000DFF 100%);color: white;font-weight: bold;float: right;" class="btn_doc">voir cours</button></a>
								<div class="pro-deadline m-b-15">
									<div class="sub-title">
										Date de formation:
									</div>
									<div class="text-muted">
										<?= $getformationinfo['date_e'] ?>
									</div>
								</div>
							 
								<div class="project-members m-b-15">
									<div>les membres participés :</div>
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="John Doe"><img src="assets/img/user.jpg" alt="John Doe"></a>
										</li>
										
									</ul>
								</div>
								
							</div>
						</div>
						 <?php }  ?>
		
        </div>


        <div id="create_project" class="modal custom-modal fade" role="dialog"  style="float: left; margin-left:-18%; ">
				<div class="modal-dialog" >
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Ajouter Formation</h4>
						</div>
						<div class="modal-body">
							<form method="POST" action="../controller/formation.php" enctype='multipart/form-data'>

									<div class="col-md-6">

										<div class="form-group">
											<label>Titre</label>
											<div class="">
												<input class="form-control " name="titre"  type="text" required="required">
											</div>
										</div>

									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>date début</label>
											<div class="cal-icon"><input class="form-control " style="" name="date_e" type="date" required="required"></div>
										</div>
									</div>
								
								<div class="row">
								 

									<div class="col-md-6">
										<div class="form-group">
											<label>document</label>
											<div class="">
												<input class="form-control"   name="fichierr"  type="file" required="required">
											</div>
										</div> 
							 
								</div>
 
							 
							 
								</div>
								 
								<div class="form-group">
									<label>Description</label>
									<textarea rows="4" cols="5" name="discription" class="form-control summernote" placeholder="Enter your message here" required="required"></textarea>
								</div>
							 </div>
								<div class="m-t-20 text-center">
									<button name="ajouterformation" class="btn btn-primary">Ajouter un formation</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			 
		 
	
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/projects.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 31 Mar 2018 08:58:51 GMT -->
</html>