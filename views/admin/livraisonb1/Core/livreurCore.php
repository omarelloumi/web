<?php
include('../Core/config.php');
include('../Entities/livreur.php');

class livreurCore
{
	
	function ajouter($livreur)
		
    {       
	
      		$number=  $livreur->getNumber();
      		$town= $livreur->getTown();
            $name= $livreur->getName();
			$ref= $livreur->getRef();
			
    	    $config=new config();
      		$bdd = $config->getConnexion();
       		$req=$bdd->prepare('INSERT INTO livreurb (number,town,name,ref)VALUES(:number,:town,:name,:ref)');
	   		$req->execute(array('number'=>$number,'town'=>$town,'name'=>$name,'ref'=>$ref));
    }
    function affiche_return()
       {
        $config=new config();
        $bdd=$config->getConnexion();

        $response=$bdd->query('SELECT * FROM livreurb');
      return $response;

        }
    function supprimer($id)

       {     
        $config=new config();
        $bdd=$config->getConnexion();
        $req=$bdd->prepare('DELETE FROM livreurb where id=:id');
        $req->execute(array('id'=>$id));
       }
 }
?>