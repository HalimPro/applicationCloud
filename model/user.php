<?php
/**
* 
*/
class User
{
	public function afficherInfoUser($conn,$id_user)
	{
		$userinfo=$conn->query("SELECT * FROM utilisateur WHERE id_util = '$id_user' and  
			(profil = 2  or profil = 1) and etat = 1  ");
		$getUserInfoById=mysqli_fetch_assoc($userinfo);
		return $getUserInfoById;
	}

	public function modifierInfoUser($conn,$id_user,$nom,$prenom,$email,$password,$adresse,$num_tel)
	{
		$modifierInfoUser=$conn->query("UPDATE utilisateur SET nom = '$nom' , prenom = '$prenom' , email = '$email' , password ='$password' , adresse='$adresse', num_tel='$num_tel' WHERE 	id_util = '$id_user' ");
	}
	 
	 public function NombreMembresValides($conn)
	 {
	   $userinfo=$conn->query("SELECT * FROM utilisateur WHERE   
			profil = 2   and etat = 1  ");
		$nombreUser=mysqli_num_rows($userinfo);
		return $nombreUser;
	 }

	 	 public function afficherMembresValides($conn)
	 {
	   $userinfo=$conn->query("SELECT * FROM utilisateur WHERE   
			profil = 2   and etat = 1  ");
		
		return $userinfo;
	 }


	  public function NombreMembresRefuse($conn)
	 {
	   $userinfo=$conn->query("SELECT * FROM utilisateur WHERE   
			profil = 2   and etat = 2  ");
		$nombreUser=mysqli_num_rows($userinfo);
		return $nombreUser;
	 }


	  public function afficherMembresRefuse($conn)
	 {
	   $userinfo=$conn->query("SELECT * FROM utilisateur WHERE   
			profil = 2   and etat = 2  "); 
		return $userinfo;
	 }

	 public function RefuseUser($conn,$id_util)
	 {
	   $userinfo=$conn->query("UPDATE utilisateur SET etat = 2  WHERE   
			profil = 2   and id_util = '$id_util'  "); 
		return $userinfo;
	 }


	 	 public function ValidesUser($conn,$id_util)
	 {
	   $userinfo=$conn->query("UPDATE utilisateur SET etat = 1  WHERE   
			profil = 2   and id_util = '$id_util'  "); 
		return $userinfo;
	 }
	 
}
?>  