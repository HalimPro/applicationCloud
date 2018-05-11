<?php

/**
* 
*/
class Formation  
{
	// cette methode permet d'ajouter un formation dans le table formation (utiliser juste par l'admin)
	public  function ajouterFormation($conn,$titre,$discription,$fichier,$date_e){

	    $ajouterFormation = $conn->query("INSERT INTO formation VALUES ('' ,'$titre','$discription','$fichier','$date_e')");
      return $ajouterFormation; 
   }

   //supprimer un formation par id ces methode utiliser juste par l'admin 

	public function supprimerFormation($conn,$idFormation)
	{
	$supprimerFormation = $conn->query("delete from formation where id_for='".$idFormation."' ");
			
		return $supprimerFormation;	
	}

	//afficher liste de toute les formation (formation.php)

		public function afficherInfoFormation($conn)
	{
		$formationinfo=$conn->query("SELECT * FROM formation order by id_for DESC ");
	 
		return $formationinfo;
	}

	//afficher liste de formation pour chaque utilisateur (mesformation.php)
	public function afficherInfoFormationByUser($conn,$id_user)
	{
		$formationinfoByUser=$conn->query("SELECT * FROM formation form ,utilisateur ut ,participationn pa where ut.id_util = pa.id_util and form.id_for = pa.id_for and  ut.id_util = '$id_user'
		 order by id_part DESC ");


	 
		return $formationinfoByUser;
	}






	public function participationnFormation($conn,$id_user,$id_for)
	{
	$participationnFormation=$conn->query("INSERT INTO participationn VALUES('',NOW(),'$id_for','$id_user')"); 

		header("location:../view/mesformation.php");
	}



	//methode verifreparticipation($conn,$id_userP,$id_forP) vérifier si l'utilisateur participer dans l'information ou non
	public function verifreparticipation($conn,$id_userP,$id_forP)
	{
		$verifreparticipation=$conn->query("SELECT * FROM   participationn  where  id_for='$id_forP' and 	id_util='$id_userP'  ");

		$count_participation=mysqli_num_rows($verifreparticipation);
	 
		return $count_participation;
	}

	// QuiterFormation($conn,$id_userQ,$id_forQ) methode utiliser par l'utilisateur en cas ou annuler la participation 
	public function QuiterFormation($conn,$id_userQ,$id_forQ)
	{
		
		$freeformation=$conn->query("DELETE FROM participationn where  id_util='$id_userQ' and id_for='$id_forQ'");

		header("location:../view/formation.php");
	}


	// methode uploadfile() récuperer la valeur input type file et copier dans le dossier fichier
	public function uploadfile()
	{ 
		$namefile =$_FILES["fichierr"]["name"];
      $fileType = strtolower(pathinfo($namefile,PATHINFO_EXTENSION));
      $nomfile=rand(1,500).".".$fileType;
      $path="../fichier/".$nomfile;


     if (move_uploaded_file($_FILES["fichierr"]["tmp_name"], $path)) {
     	 
     	 return  $nomfile;
     }else{ 
     	return 0;
     }

 
	}

	  
   
   
   

   
    /*Modifier*/
 
	public	function modifierFormation($conn,$titre,$formateur,$discription,$date_e){
			
	$modifierFormation = $conn->query("update_e formation set titre='".$titre."',formateur='".$formateur."',discription='".$discription."',date_e='".$date_e."'
	");
		return $modifierFormation;
	}
	
	
	
	
	
		

	
	
		
		
	

	 
}

?>