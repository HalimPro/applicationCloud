<?php 
include_once("navBarUser.php"); 
include_once("../model/formation.php");
$formation = new Formation();
$geteformation=$formation->afficherInfoFormation($conn);
?>


            <br><br>
 			 <style type="text/css">
 			 	.btnfor{

 			 		border:0;padding: 10px;border-radius: 8px;box-shadow: 0px 2px 5px rgba(0,0,0,0.3);background-image: linear-gradient( 135deg, #6B73FF 10%, #000DFF 100%);color: white;font-weight: bold;
 			 		 
 			 	}
 			 </style>


 			 <div class="page-wrapper" style=" width: 100%;margin-left: 0px;">
                <div class="content container-fluid">
					 
					<div class="row filter-row"  >
						<div class="col-sm-3 col-xs-6" style="margin: auto;float: none;">  
							<div class="form-group form-focus">
								<label class="control-label">Recherche</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						    
                    </div>

<!-- 
					<div class="row" style="  width: 100%; background: red;"> -->
						 
					 
<?php while ($getformationinfo=mysqli_fetch_assoc($geteformation)) {
$participation=$formation->verifreparticipation($conn,$id_user,$getformationinfo['id_for']);
	?>
						<div class="col-lg-3 col-sm-4">
							<div class="card-box project-box">
								 
								<h4 class="project-title"><a href="project-view.html"><?= $getformationinfo['titre'] ?></a></h4>
								<small class="block text-ellipsis m-b-15">
									<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
									<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
								</small>
								<p class="text-muted"> 
									<?= $getformationinfo['discription'] ?>
									<a href="../fichier/<?= $getformationinfo['fichier'] ?>">
									<button style="border:0;padding: 10px;border-radius: 8px;box-shadow: 0px 2px 5px rgba(0,0,0,0.3);background-image: linear-gradient( 135deg, #6B73FF 10%, #000DFF 100%);color: white;font-weight: bold; float: right;" class="btn_doc">voir cours</button></a>
								</p>
								<div class="pro-deadline m-b-15">
									<div class="sub-title">
										Deadline:
									</div>
									<div class="text-muted">
										<?= $getformationinfo['date_e'] ?>
									</div>
								</div>
								<div class="project-members m-b-15"> 
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="../assets/img/user.jpg" alt="Jeffery Lalor"></a>

										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="../assets/img/user.jpg" alt="Jeffery Lalor"></a>
											
										</li>
									</ul>
								</div>
								 
								 <center>

								 	<?php if ($participation != 1) { ?>
								  
								 	
								<a href="../controller/formation.php?id_forP=<?= $getformationinfo['id_for'] ?>&&id_userP=<?= $id_user ?>" style="background:#78909C;"  class="btn btn-default btn-sm m-t-10 btnfor">Participer</a> 						
								<?php }else{  ?>

								<a href="../controller/formation.php?id_forQ=<?= $getformationinfo['id_for'] ?>&&id_userQ=<?= $id_user ?>" style="background-image: linear-gradient( 135deg, #FEB692 10%, #EA5455 100%);"  class="btn btn-default btn-sm m-t-10 btnfor">Quiter</a> 

								<?php }?>
									</center>
							</div>
						</div>




<?php } ?>


















			<!-- 			
					</div> -->
                </div>
				