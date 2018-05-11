<?php
include_once("../config/config.php");
include_once("../model/formation.php");
include_once("../model/acces.php");
 

$acces = new Acces();
$formation = new Formation();

if (isset($_REQUEST['ajouterformation'])) {

	$titre=$acces->getvalue('titre'); 
	$discription=$acces->getvalue('discription');
	$date_e=$acces->getvalue('date_e');

       
      

	$fichier=$formation->uploadfile();

echo $fichier;
 

$formation->ajouterFormation($conn,$titre,$discription,$fichier,$date_e);

header("location:../view/adminFormation.php");
 
} 


if (isset($_REQUEST['id_Supprimer'])) {

	$formation->supprimerFormation($conn,$_REQUEST['id_Supprimer']);

	header("location:../view/adminFormation.php");
}


if (isset($_REQUEST['id_forP'])) {

	$id_user=$acces->getvalue('id_userP');
	$id_for=$acces->getvalue('id_forP');

	$formation->participationnFormation($conn,$id_user,$id_for);

	echo $id_user."<br>".$id_for;
 
}

if (isset($_REQUEST['id_forQ'])) {

	$id_user=$acces->getvalue('id_userQ');
	$id_for=$acces->getvalue('id_forQ');

	$formation->QuiterFormation($conn,$id_user,$id_for);
 
}




//echo $nom."<br>".$prenom."<br>".$email."<br>".$password."<br>".$adresse."<br>".$num_tel;

?>