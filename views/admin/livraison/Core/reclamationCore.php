<?php
include('../Core/config.php');
include('../Entities/reclamation.php');

class reclamationCore
{
	function ajoutrec($reclamation)
		
    {  
			$rec=$reclamation->getRec();
			$name=$reclamation->getName();
			
    	    $config=new config();
      		$bdd = $config->getConnexion();
       		$req=$bdd->prepare('INSERT INTO reclamation(rec,name)VALUES(:rec,:name)');
	   		$req->execute(array('rec'=>$rec,'name'=>$name));
    }
}
?>