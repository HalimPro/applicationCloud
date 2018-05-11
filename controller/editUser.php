<?php
include_once("../config/config.php");
include_once("../model/user.php");
include_once("../model/acces.php");
 
$acces = new Acces();


$user = new User();
$id_user=$acces->getvalue('id_user');
$nom=$acces->getvalue('nom');
$prenom=$acces->getvalue('prenom');
$email=$acces->getvalue('email');
$password=$acces->getvalue('password');
$adresse=$acces->getvalue('adresse');
$num_tel=$acces->getvalue('num_tel');

$user->modifierInfoUser($conn,$id_user,$nom,$prenom,$email,$password,$adresse,$num_tel);
header("location:../view/profileUser.php");

?>