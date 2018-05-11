 <?php 
 include_once("navBarUser.php");  
include_once("../model/document.php");
$document = new Document();
$getdocument=$document->afficherInfoDocumentPrive($conn,$id_user);
 

 ?>

 

            <br><br><br><br><br><br>
 		 

<?php while ($getInfodocument=mysqli_fetch_assoc($getdocument)) {

	$sizefile=$document->formatSizeUnits($getInfodocument['sizeDoc']);
	$fileType = strtolower(pathinfo($getInfodocument['doc'],PATHINFO_EXTENSION));

	if ($getInfodocument['type_doc']== 1 ) {
		$color="green";
		$mot="Public";
	}else{
		$color="red";
		$mot="Privé";
	}
	?>
		     

 
		    	<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget"> 
								<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
									<ul class="dropdown-menu pull-right">
										<li><a href="" ><i class="fa fa-pencil m-r-5"></i> Modifier</a></li>
										<li><a href="../controller/document.php?id_SupprimerDoc=<?= $getInfodocument['id_doc'] ?>&&document=<?= $getInfodocument['doc'] ?>"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a></li>
									</ul>
								</div>

								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="client-profile.html"><?= $getInfodocument['titre_doc']."/".$fileType  ?></a><br>
									
								</h4><br>

									 <span style="padding: 5px 5px 5px 5px; background:<?= $color ?>;color:white;border-radius: 12px;"><?= $mot ?></span> 
									


								<h5 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="client-profile.html"><?= $getInfodocument['nom']." ".$getInfodocument['prenom'] ?></a></h5>
								<div class="small text-muted"><?= $sizefile ?></div>
							 
									<a href="../document/<?= $getInfodocument['doc'] ?>" class="btn-sm m-t-10">
									<button style="border:0;padding: 10px;border-radius: 8px;box-shadow: 0px 2px 5px rgba(0,0,0,0.3);background-image: linear-gradient( 135deg, #6B73FF 10%, #000DFF 100%);color: white;font-weight: bold; float: right;" class="btn_doc">voir document</button></a><br>


									 
							 
 							</div>
						</div>

<?php } ?>
		    
            
 