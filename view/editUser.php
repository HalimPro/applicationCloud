<?php 
include_once("navBarUser.php"); 
include_once("../model/user.php"); 
$user = new User();
$info=$user->afficherInfoUser($conn,$id_user);
?>
<br><br><br>
<div id="add_client"     >
				<div class="modal-dialog" style=" width: 100%;">
					 
					<div class="modal-content modal-lg" style=" margin: auto;">
						<div class="modal-header">
							<h4 class="modal-title">Add Client</h4>
						</div>
						<div class="modal-body" style="width: 100%;">
							<div class="m-b-30" style="width: 100%;">
								<form method="POST" action="../controller/editUser.php">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Nome <span class="text-danger">*</span></label>
												<input class="form-control" name="nom" value="<?= $info['nom']?>" type="text">
												<input class="form-control" name="id_user" value="<?= $id_user ?>" type="hidden">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Prenom</label>
												<input class="form-control" name="prenom" value="<?= $info['prenom']?>" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Email <span class="text-danger">*</span></label>
												<input class="form-control" name="email" value="<?= $info['email']?>" type="email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">adresse <span class="text-danger">*</span></label>
												<input class="form-control floating" name="adresse" value="<?= $info['adresse']?>" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Telephone</label>
												<input class="form-control" name="num_tel" value="<?= $info['num_tel']?>" type="number">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Mote de passe</label>
												<input class="form-control" name="password" value="<?= $info['password']?>" type="text">
											</div>
										</div>
										<div class="col-md-6">  
											<div class="form-group">
												<label class="control-label">Photo <span class="text-danger">*</span></label>
												<input class="form-control floating" type="file">
											</div>
										</div>
										 


									 
									</div>
								 
									<div class="m-t-20 text-center">
										<button type="submit" class="btn btn-primary"> Modifier</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>