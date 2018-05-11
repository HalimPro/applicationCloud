<?php
include_once("../config/config.php");
include_once("../model/document.php");
include_once("../model/acces.php");
 

$acces = new Acces();
$document = new Document();



if (isset($_REQUEST['ajouterdoc'])) {


 


	$id_user=$acces->getvalue('id_user');
	$doc=$document->uploaddocument();


	$id_espace=$acces->getvalue('id_espace');
	$titredoc=$acces->getvalue('titredoc');
	$type_doc=$acces->getvalue('type_doc');
	$sizeDoc=$_FILES["documentup"]["size"];
	$document->ajouterDocument($conn,$doc,$titredoc,$type_doc,$sizeDoc,$id_user,$id_espace);
	header('location:../view/profileUser.php');

}


if (isset($_REQUEST['id_SupprimerDoc'])) {

	unlink("../document/".$_REQUEST['document']);
	$document->supprimerDocument($conn,$_REQUEST['id_SupprimerDoc']);
	header("location:../view/mesdocument.php");
}

?>