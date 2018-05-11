<?php include_once("navBarUser.php"); 
include_once("../model/espace.php");


$espace = new Espace();

$getespace=$espace->afficherInfoEspace($conn);

 
?>


<br><br><br><br> 

 
 <style type="text/css">
 			 	.btnfor{

 			 		border:0;padding: 10px;border-radius: 8px;box-shadow: 0px 2px 5px rgba(0,0,0,0.3);background-image: linear-gradient( 135deg, #6B73FF 10%, #000DFF 100%);color: white;font-weight: bold;
 			 		 
 			 	}
 			 </style>

            <br><br><br><br><br><br>
            <?php while ($getespaceinfo=mysqli_fetch_assoc($getespace)) {

            	$verifreservation=$espace->verifreservation($conn,$id_user,$getespaceinfo["id_espace"]);



             ?>
 				<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget">
								
								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="client-profile.html"><?= $getespaceinfo["nom"] ?></a></h4>
								<h5 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="client-profile.html"><?= $getespaceinfo["capacite"] ?>GO</a></h5>

								<?php if ($verifreservation == 1) { ?>

								<a style="background:#FF5252;"  href="../controller/espaces.php?id_espacefree=<?= $getespaceinfo["id_espace"]?>&id_user=<?= $id_user ?>" class="btn btn-default btn-sm m-t-10 btnfor">libré</a>

								 
								<?php }else{  ?> 


								

								<a style="background:#78909C;"  href="../controller/espaces.php?id_espace=<?= $getespaceinfo["id_espace"]?>&id_user=<?= $id_user ?>" class="btn btn-default btn-sm m-t-10 btnfor">réserver</a>


								<?php } ?>

							 

 							</div>
						</div>

<?php }?>
		    </div>


		 


		    

		     


		    </div>  