<?php
include_once("../config/config.php");
include_once("../model/espace.php");
include_once("../model/acces.php");
 

$acces = new Acces();
$espace = new Espace();

if (isset($_REQUEST['ajouterespace'])) {

	$titre=$acces->getvalue('titre');
	$capacite=$acces->getvalue('capacite');
	$id_user=$acces->getvalue('id_user');

	echo $titre."<br>".$capacite."<br>".$id_user;


$espace->ajouterEspace($conn,$capacite,$titre,$id_user);
 
} 


if (isset($_REQUEST['id_espace'])) {

	$id_espace=$acces->getvalue('id_espace');
	
	$id_user=$acces->getvalue('id_user');
  

$espace->reservationEspace($conn,$id_user,$id_espace);
 
} 


if (isset($_REQUEST['id_espacefree'])) {

	$id_espace=$acces->getvalue('id_espacefree');
	
	$id_user=$acces->getvalue('id_user');
  

$espace->freeEspace($conn,$id_user,$id_espace);

 
} 


//echo $nom."<br>".$prenom."<br>".$email."<br>".$password."<br>".$adresse."<br>".$num_tel;

?>