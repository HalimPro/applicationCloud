<?php 

/**
* 
*/
class Acces 
{
	public function inscription($conn,$nom,$prenom,$email,$password,$adresse,$telephone)
	{
		
		$inscriptionUser=$conn->query("INSERT INTO utilisateur VALUES('','$nom','$prenom','$email','$password','$adresse','$telephone','','2','0')");
		header("location:../view/login.php");
	}

	public function loginUser($conn,$email,$password)
	{ 
		$user=$conn->query("SELECT * FROM utilisateur WHERE email = '$email' and password = '$password' and  profil = 2 and etat = 1  ");
 
		$usernum=mysqli_num_rows($user);
		
		if ($usernum == 1) {
			header("location:../view/profileUser.php");
			session_start();
			$getIdUser= mysqli_fetch_assoc($user);

		$_SESSION['id_user']=$getIdUser['id_util'];
		
		}else{
			header("location:../view/login.php?message_error=error");
		}


	}


	public function loginAdmin($conn,$email,$password)
	{
		$admin=$conn->query("SELECT * FROM  utilisateur WHERE email = '$email' and password = '$password' and  profil = 1 ");
	 

		$adminnum=mysqli_num_rows($admin);
	 

		if ($adminnum == 1 ) {

			header("location:../view/admin.php");
			session_start();
			$getIdAdmin= mysqli_fetch_assoc($admin);
			$_SESSION['id_user']=$getIdAdmin['id_util'];


		}else{
			header("location:../view/login.php");
		}


	}


	public function getValue($value)
	{
		return $_REQUEST[$value];
	}
 
}



 ?>