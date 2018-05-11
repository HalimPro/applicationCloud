<?php
/**
* 
*/
class Document 
{
	public function ajouterDocument($conn,$doc,$titre_doc,$type_doc,$sizeDoc,$id_user,$id_espace)
	{
		$ajouterDocument=$conn->query("INSERT INTO document VALUES ('','$doc','$titre_doc','$type_doc','$sizeDoc','$id_user','$id_espace')");
		return $ajouterDocument;
	}


	public function afficherInfoDocument($conn)
	{
		 $afficherInfoDocument=$conn->query("SELECT * FROM utilisateur u,  document doc WHERE u.id_util=doc.id_util and  type_doc = 1 ");
		 return $afficherInfoDocument;
	}


  public function afficherInfoDocumentPrive($conn,$id_user)
  {
     $afficherInfoDocumentPrive=$conn->query("SELECT * FROM utilisateur u,  document doc WHERE u.id_util=doc.id_util and  ( type_doc = 1 or type_doc = 2) and u.id_util = '$id_user' ");
     return $afficherInfoDocumentPrive;
  }

  public function supprimerDocument($conn,$id_doc)
  {
     $supprimerDocument=$conn->query("DELETE FROM document WHERE id_doc = '$id_doc' ");
     return $supprimerDocument;
  }


	// methode uploaddocument() récuperer la valeur input type file et copier dans le dossier fichier
	public function uploaddocument()
	{ 
		$namefile =$_FILES["documentup"]["name"];
      $fileType = strtolower(pathinfo($namefile,PATHINFO_EXTENSION));
      $nomfile=rand(1,500).".".$fileType;
      $path="../document/".$nomfile;


     if (move_uploaded_file($_FILES["documentup"]["tmp_name"], $path)) {
     	 
     	 return  $nomfile;
     }else{ 
     	return 0;
     }

 
	}



	 function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}

	 
}
?>