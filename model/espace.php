<?php

/**
* 
*/
class Espace 
{
	//methode ajouterEspace($conn,$capacite,$titre,$id_user) permert d'ajouter un espace dans le table espace(utiliser juste par l'admin)
	public function ajouterEspace($conn,$capacite,$titre,$id_user)
	{
		
		$ajoutercapacite=$conn->query("INSERT INTO espace VALUES(null,'$capacite','$titre','$id_user')");
		header("location:../view/adminEspace.php");
	}

	//afficher la liste de tout l'espace 
	public function afficherInfoEspace($conn)
	{
		$espaceinfo=$conn->query("SELECT * FROM espace order by id_espace DESC ");
	 
		return $espaceinfo;
	}

	//afficher l'espace reservé par l'utilisateur 
	public function afficherInfoEspaceUser($conn,$id_user)
	{
		$espaceinfoUser=$conn->query("SELECT * FROM utilisateur ut , espace es , reservation res  where ut.id_util = res.id_user and es.id_espace=res.id_espace and ut.id_util = '$id_user' ");
	 
		return $espaceinfoUser;
	}



	public function verifreservation($conn,$id_user,$id_espace)
	{
		$verifreservation=$conn->query("SELECT * FROM   reservation  where  id_user='$id_user' and id_espace='$id_espace'  ");

		$count_reservation=mysqli_num_rows($verifreservation);
	 
		return $count_reservation;
	}


	public function reservationEspace($conn,$id_user,$id_espace)
	{
		
		$reservationcapacite=$conn->query("INSERT INTO reservation VALUES(null,'$id_user','$id_espace',NOW())");

		header("location:../view/espace.php");
	}



	public function freeEspace($conn,$id_user,$id_espace)
	{
		
		$freeEspace=$conn->query("DELETE FROM reservation where  id_user='$id_user' and id_espace='$id_espace'");

		header("location:../view/profileUser.php");
	}



 
}

?>