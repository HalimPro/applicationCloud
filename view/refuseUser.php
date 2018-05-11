
<?php
include_once("navBarAdmin.php");
include_once("../model/user.php");


$user = new User();

$getuser=$user->afficherMembresRefuse($conn);
?>
<br><br><br><br><br><br>
<div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employee</h4>
						</div>
					 
					</div>



				 
					<div class="row staff-grid-row">
				 
				 
					 
					  
						 
						 
						<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
								<?php while ($getuserrefuseinfo=mysqli_fetch_assoc($getuser)) { ?>
							<div class="profile-widget">
								<div class="profile-img">
									<a href="profile.html" class="avatar">C</a>
								</div>
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="../controller/user.php?id_Modifier=<?= $getuserrefuseinfo['id_util'] ?>" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
										<li><a href="../controller/user.php?id_Supprimer=<?= $getuserrefuseinfo['id_util'] ?>" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
									</ul>
								</div>
								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.html"><?= $getuserrefuseinfo['nom']." ".$getuserrefuseinfo['prenom'] ?></a></h4>
								<div class="small text-muted"><?= $getuserrefuseinfo['email'] ?></div> 
							</div>

							<?php } ?>
						</div>
					</div>
                </div>