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
			$datel= $livraison->getDatel();
			
    	    $config=new config();
      		$bdd = $config->getConnexion();
       		$req=$bdd->prepare('INSERT INTO livraison(number,town,adresse,name,ref,datel)VALUES(:number,:town,:adresse,:name,:ref,:datel)');
	   		$req->execute(array('number'=>$number,'town'=>$town,'adresse'=>$adresse,'name'=>$name,'ref'=>$ref,'datel'=>$datel));
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
	   function supprimer2($name)

       {     
        $config=new config();
        $bdd=$config->getConnexion();
        $req=$bdd->prepare('DELETE FROM reclamation where name=:name');
        $req->execute(array('name'=>$name));
       }
	function recherchechef($key)
	{
	$config=new config();
    $bdd=$config->getConnexion();
    $response=$bdd->prepare('SELECT * FROM livraison WHERE id=:key OR number=:key OR town=:key  OR adresse=:key OR name=:key OR ref=:key  OR datel=:key');
    $response->execute(array('key'=>$key));
    return $response;
	}
 }
?>