<?php 
include_once("navBarUser.php"); 
include_once("../model/user.php"); 
include_once("../model/espace.php");
$user = new User();
$info=$user->afficherInfoUser($conn,$id_user);
$espace = new Espace();
$getespaceUser=$espace->afficherInfoEspaceUser($conn,$id_user);
$getespaceUserdox=$espace->afficherInfoEspaceUser($conn,$id_user);
?>
<br><br><br><br> 
 <style type="text/css">
 			 	.btnfor{

 			 		border:0;padding: 10px;border-radius: 8px;box-shadow: 0px 2px 5px rgba(0,0,0,0.3);background-image: linear-gradient( 135deg, #6B73FF 10%, #000DFF 100%);color: white;font-weight: bold;
 			 		 
 			 	}
 			 </style>
<div class="card-box m-b-0">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									<div class="profile-img-wrap">
										<div class="profile-img">
											<a href="#"><img class="avatar" url(../images/7allouma.PNG); alt=""></a>
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-5">
												<div class="profile-info-left">
													<h3 class="user-name m-t-0"><?= $info['nom']." ". $info['prenom'] ?></h3>
													<br><br><br>
												 
<br><br><br>
												  

														</div>
											</div>
											<div class="col-md-7">
												<ul class="personal-info">
													<li>
														<span class="title">Phone:</span>
														<span class="text"><a href="#"><?= $info['num_tel'] ?></a></span>
													</li>
													<li>
														<span class="title">Email:</span>
														<span class="text"><a href="#"><?= $info['email'] ?></a></span>
													</li>
													 
													<li>
														<span class="title">Address:</span>
														<span class="text"><?= $info['adresse'] ?></span>
													</li>

													<li>
														<a style="background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);" data-toggle="modal" data-target="#ajouterDocument"  class="btn btn-default btn-sm m-t-10 btnfor">Ajouter un document </a>
													</li>
													 
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>




            <br><br><br><br><br><br>
 <?php while ($getespaceinfoUser=mysqli_fetch_assoc($getespaceUser)) {

            	$verifreservation=$espace->verifreservation($conn,$id_user,$getespaceinfoUser["id_espace"]);



             ?>
 				<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget">
								
								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a><?= $getespaceinfoUser["nom"] ?></a></h4>
								<h5 class="user-name m-t-10 m-b-0 text-ellipsis"><a><?= $getespaceinfoUser["capacite"] ?>GO</a></h5>

								<?php if ($verifreservation == 1) { ?>

								<a style="background:#FF5252;"  href="../controller/espaces.php?id_espacefree=<?= $getespaceinfoUser["id_espace"]?>&id_user=<?= $id_user ?>" class="btn btn-default btn-sm m-t-10 btnfor">libré</a>

								 
								<?php }  ?> 


								
 

							 

 							</div>
						</div>

<?php }?>

		 


		    

		     


		    </div>  


		    	<div id="ajouterDocument" class="modal custom-modal fade" role="dialog"  style="float: left; margin-left:-18%; ">
				<div class="modal-dialog" >
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Alimenter</h4>
						</div>
						<div class="modal-body">
							<form action="../controller/document.php" method="POST" enctype="multipart/form-data">


									<div class="col-md-6">

										<div class="form-group">
											<label>choix un espace</label>
											 

												<select name="id_espace" class="form-control">
											<?php  
											while ($getespaceinfoUserdoc=mysqli_fetch_assoc($getespaceUserdox)) {?>
													 
													<option value="<?= $getespaceinfoUserdoc["id_espace"] ?>"><?= $getespaceinfoUserdoc["nom"] ?> </option>

													<?php } ?>

													</select>
											 
											 
										</div>

									</div>


									<div class="col-md-6">

										<div class="form-group">
											<label>type</label>
											 

										   <select name="type_doc" class="form-control">
											<option value="1">public </option>
											<option value="2">privé </option>	
										  </select>
											 
											 
										</div>

									</div>



									<div class="col-md-6">

										<div class="form-group">
											<label>Titre</label>
											<div class="">
												<input class="form-control" name="titredoc"  type="text" required="required">
											</div>
										</div>

									</div>

									<div class="col-md-6">

										<div class="form-group">
											<label>Ajouter fichier</label>
											<div class="">
												<input class="form-control" name="documentup"  type="file" required="required">
												<input value="<?= $id_user ?>" name="id_user" type="hidden">

											</div>
										</div>

									</div>
									<div class="col-md-12">

										<div class="form-group">
											<center>
									<button type="submit" name="ajouterdoc" class="btn btn-primary">alimenter</button> </center>
								</div></div>
								
 								 
								 
									
							 
							 
							 </form>
							 </div>
						
						</div>
					</div>
				</div>
			</div>