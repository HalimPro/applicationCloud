<?php
include_once("../config/config.php");
include_once("../model/acces.php");


$acces = new Acces();
 
if (isset($_REQUEST['loginUser'])) {
 	 $email=$acces->getvalue('email');
$password=$acces->getvalue('password');
 

$acces->loginUser($conn,$email,$password);
 } 


 if (isset($_REQUEST['loginAdmin'])) {
 	 $email=$acces->getvalue('email');
$password=$acces->getvalue('password');
 

$acces->loginAdmin($conn,$email,$password);
 }  

?>