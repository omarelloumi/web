<?php
include('../Core/config.php');
include('../Entities/livraison.php');

class livraisonCore
{
	
	function ajouter($livraison)
		
    {       
	
      		$number=  $livraison->getNumber();
      		$town= $livraison->getTown();
      		$adresse= $livraison->getAdresse();
            $name= $livraison->getName();
			$ref= $livraison->getRef();
			
    	    $config=new config();
      		$bdd = $config->getConnexion();
       		$req=$bdd->prepare('INSERT INTO livraison(number,town,adresse,name,ref)VALUES(:number,:town,:adresse,:name,:ref)');
	   		$req->execute(array('number'=>$number,'town'=>$town,'adresse'=>$adresse,'name'=>$name,'ref'=>$ref));
    }
    function affiche_return()
       {
        $config=new config();
        $bdd=$config->getConnexion();

        $response=$bdd->query('SELECT * FROM livraison');
      return $response;

        }
    function supprimer($id)

       {     
        $config=new config();
        $bdd=$config->getConnexion();
        $req=$bdd->prepare('DELETE FROM livraison where id=:id');
        $req->execute(array('id'=>$id));
       }
 }
?>