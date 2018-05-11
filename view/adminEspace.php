<?php 
include_once("navBarAdmin.php");
include_once("../model/espace.php");


$espace = new Espace();

$getespace=$espace->afficherInfoEspace($conn);


?>
<!DOCTYPE html>
<html>
     
<head> 
    </head>
    <body>
        <div class="main-wrapper">
            
             
            <div class="page-wrapper" style="margin: 0;">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">liste des espaces</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30" >
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i>Alimenter</a>
						 
						</div>
					</div> 

 


					<br><br><br><br><br><br>

					<?php while ($getespaceinfo=mysqli_fetch_assoc($getespace)) { ?>
						 
					 <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget">
								
								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="client-profile.html"><?= $getespaceinfo['nom'] ?></a></h4>
								<h5 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="client-profile.html"><?= $getespaceinfo['capacite'] ?>GO</a></h5>
								 
 							</div>
						</div>

						<?php }?>
						   
		 
                </div>

            </div>
	<div id="create_project" class="modal custom-modal fade" role="dialog"  style="float: left; margin-left:-18%; ">
				<div class="modal-dialog" >
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Alimenter</h4>
						</div>
						<div class="modal-body">
							<form action="../controller/espaces.php">

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
											<label>capacite</label>
											<div class="">
												<input class="form-control " name="capacite"  type="number" required="required">
												<input value="<?= $id_user ?>" name="id_user" type="hidden">

											</div>
										</div>

									</div>

 
								
							 
							 
							 </div>
								<div class="m-t-20 text-center">
									<button type="submit" name="ajouterespace" class="btn btn-primary">alimenter</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="edit_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Project</h4>
						</div>
						<div class="modal-body">
							<form method="POST" action="../controller/espaces.php">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Project Name</label>
											<input class="form-control" value="School Guru" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Client</label>
											<select class="select">
												<option>Global Technologies</option>
												<option>Delta Infotech</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Start Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>End Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" style="" type="text"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label>Rate</label>
											<input placeholder="$50" class="form-control" value="$5000" type="text">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>&nbsp;</label>
											<select class="select">
												<option>Hourly</option>
												<option selected>Fixed</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Priority</label>
											<select class="select">
												<option selected>High</option>
												<option>Medium</option>
												<option>Low</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Project Leader</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Team Leader</label>
											<div class="project-members">
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor">
													<img src="assets/img/user.jpg" class="avatar" alt="Jeffery Lalor" height="20" width="20">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Team</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Team Members</label>
											<div class="project-members">
												<a href="#" data-toggle="tooltip" title="John Doe">
													<img src="assets/img/user.jpg" class="avatar" alt="John Doe" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="Richard Miles">
													<img src="assets/img/user.jpg" class="avatar" alt="Richard Miles" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="John Smith">
													<img src="assets/img/user.jpg" class="avatar" alt="John Smith" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="Mike Litorus">
													<img src="assets/img/user.jpg" class="avatar" alt="Mike Litorus" height="20" width="20">
												</a>
												<span class="all-team">+2</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea rows="4" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
								</div>
								<div class="form-group">
									<label>Upload Files</label>
									<input class="form-control" type="file">
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Project</h4>
						</div>
						<div class="modal-body card-box">
							<p>Are you sure want to delete this?</p>
							<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
	
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/projects.html by HTTrack Website Copier/3.x [XR&CO'2010], Sat, 31 Mar 2018 08:58:51 GMT -->
</html>