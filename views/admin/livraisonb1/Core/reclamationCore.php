<?php
include('../Core/config.php');
include('../Entities/reclamation.php');

class reclamationCore
{
	function ajoutrec($reclamation)
		
    {  
			$rec=$reclamation->getRec();
			
    	    $config=new config();
      		$bdd = $config->getConnexion();
       		$req=$bdd->prepare('INSERT INTO reclamation(rec)VALUES(:rec)');
	   		$req->execute(array('rec'=>$rec));
    }
	function affiche_return()
       {
        $config=new config();
        $bdd=$config->getConnexion();

        $response=$bdd->query('SELECT * FROM reclamation');
      return $response;

        }
}
?>