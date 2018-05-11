<?php
include_once("../config/config.php");
include_once("../model/user.php");

 
$user = new User();

if (isset($_REQUEST['id_Blouquer'])) {

	
 


$user->RefuseUser($conn,$_REQUEST['id_Blouquer']);

header("location:../view/adminFormation.php");
 
} 


// if (isset($_REQUEST['id_Supprimer'])) {

// 	$formation->supprimerFormation($conn,$_REQUEST['id_Supprimer']);

// 	header("location:../view/adminFormation.php");
// }

//echo $nom."<br>".$prenom."<br>".$email."<br>".$password."<br>".$adresse."<br>".$num_tel;

?>