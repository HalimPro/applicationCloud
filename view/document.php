 <?php include_once("navBarUser.php"); 
  
include_once("../model/document.php");
$document = new Document();
$getdocument=$document->afficherInfoDocument($conn);
 

 ?>

 

            <br><br><br><br><br><br>
 		 

<?php while ($getInfodocument=mysqli_fetch_assoc($getdocument)) {

	$sizefile=$document->formatSizeUnits($getInfodocument['sizeDoc']);
	$fileType = strtolower(pathinfo($getInfodocument['doc'],PATHINFO_EXTENSION));
	?>
		     

 
		    	<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget">
								
								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="client-profile.html"><?= $getInfodocument['titre_doc']."/".$fileType  ?></a></h4><br>

									 <span style="padding: 5px 5px 5px 5px; background:green;color:white;border-radius: 12px;">Public</span>
									


								<h5 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="client-profile.html"><?= $getInfodocument['nom']." ".$getInfodocument['prenom'] ?></a></h5>
								<div class="small text-muted"><?= $sizefile ?></div>
							 
									<a href="../document/<?= $getInfodocument['doc'] ?>" class="btn-sm m-t-10">
									<button style="border:0;padding: 10px;border-radius: 8px;box-shadow: 0px 2px 5px rgba(0,0,0,0.3);background-image: linear-gradient( 135deg, #6B73FF 10%, #000DFF 100%);color: white;font-weight: bold; float: right;" class="btn_doc">voir document</button></a><br>

							 
 							</div>
						</div>

<?php } ?>
		    
            
 