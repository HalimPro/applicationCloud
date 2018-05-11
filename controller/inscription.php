<?php
include_once("../config/config.php");
include_once("../model/acces.php");


$acces = new Acces();

$nom=$acces->getvalue('nom');
$prenom=$acces->getvalue('prenom');
$email=$acces->getvalue('email');
$password=$acces->getvalue('password');
$adresse=$acces->getvalue('adresse');
$num_tel=$acces->getvalue('num_tel');

$acces->inscription($conn,$nom,$prenom,$email,$password,$adresse,$num_tel);



//echo $nom."<br>".$prenom."<br>".$email."<br>".$password."<br>".$adresse."<br>".$num_tel;

?>