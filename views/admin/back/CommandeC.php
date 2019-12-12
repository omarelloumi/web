<?php

//include "config.php";

class commandeC {

function affichercommande ($commande){
		echo "L'identifiant du commande: ".$commande->getidc()."<br>";
		echo "L'identifiant du client: ".$commande->getidu()."<br>";
		echo "Date d'achat: ".$commande->getda()."<br>";
		echo "Les produit achetes: ".$commande->getta()."<br>";
		echo "Valide: ".$commande->getvalide()."<br>";
	}
function ajoutercommande($commande)
	{
		$sql="insert into commande (id_client,dateAchat,montantC) values (:id_client,:dateAchat,:montantC)";
		$db = config::getConnexion();
		
		try
		{
       
        //$idCommande=$commande->get_idCommande();
        $dateAchat=$commande->getdate();
        $montantC=$commande->getMontantC();
        $id_client=$commande->getidu();
        
        $req=$db->prepare($sql);
     		$req->bindValue(':id_client',$id_client);

		//$req->bindValue(':id_Commande',$id_Commande);
		$req->bindValue(':dateAchat',$dateAchat);
		$req->bindValue(':montantC',$montantC);
		
		
		
        $req->execute();
           
        }

        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

        return $db->lastInsertId();
	}
		
	
	function recuperercommande($id_Commande)
	{
   		$sql="SELECT * from commande where id_Commande=$id_Commande ";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
	function recuperercommande1($id_client)
	{
		$sql="SElECT * From commande where id_client= $id_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercommande($id_commande){
		$sql="DELETE FROM Commande where id_commande=:id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommande($id_commande)
	{
		$valide=1;
		$sql="UPDATE commande SET valide= :valide WHERE id_commande= :id_commande";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
        $req=$db->prepare($sql);
        $req->bindvalue(':id_commande',$id_commande);
		$req->bindValue(':valide',$valide);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
		function recuperercontenucommande($id_Commande)
	{
        $sql="SELECT * from lignecommande where id_Commande=$id_Commande ";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
		function countpanier($id_client)
	{
		$sql="select count(*) as cnt from panier where id_client=$id_client ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		
		try{
            $req->execute();
            return $req;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function validerCommande($id_commande)
	{
		$sql="UPDATE commande SET valide=:1 WHERE id_commande=:id_commande";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function afficherligne($id_ligne){
		
		$sql="SElECT * From ligne_commande where id_ligne=$id_ligne";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ajouterligne($idProd,$qte,$idCmd){
		
		$sql="INSERT INTO ligne_commande VALUES($idProd,$qte,$idCmd)";
		$db = config::getConnexion();
		try{
		$db->query($sql);
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
}

?>