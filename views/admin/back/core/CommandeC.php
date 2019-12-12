<?php

//include "config.php";

class commandeC {

function affichercommande ($commande){
		echo "L'identifiant du commande: ".$commande->getid_commande()."<br>";
		echo "L'identifiant du client: ".$commande->getid_client()."<br>";
		echo "Date d'achat: ".$commande->getdate()."<br>";
		echo "Les produit achetes: ".$commande->getMontantC()."<br>";
		echo "etat: ".$commande->getetatCommande()."<br>";
	}
function ajoutercommande($commande)
	{
		$sql="insert into commande (id_client,dateAchat,montantC,etatCommande) values (:id_client,:dateAchat,:montantC,:etat)";
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
		$req->bindValue(':etat','en_cours');
		
		
		
        $req->execute();
           
        }

        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

        return $db->lastInsertId();
	}
		
	
	function recuperercommande($id_commande)
	{
   		$sql="SELECT * from commande ";
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
		$sql="DELETE FROM commande where id_commande=:id_commande";
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
		function recuperercontenucommande($idCmd)
	{
        $sql="SELECT * from ligne_commande l, produit p where idCmd=$idCmd and l.id_produit=p.id_produit ";
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

	function modifiercommandes($commande,$id_commande){
		$sql="UPDATE commande SET id_commande=:id_commandee, id_client=:id_client,dateAchat=:dateAchat,montantC=:montantC,etatCommande=:etatCommande WHERE id_commande=:id_commande";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$id_commandee=$commande->getid_commande();
        $id_client=$commande->getid_client();
        $dateAchat=$commande->getdateAchat();
        $montantC=$commande->getMontantC();
       
        $etatCommande=$commande->getetatCommande() ;
		$datas = array(':id_commandee'=>$id_commandee,':id_commande'=>$id_commande, ':id_client'=>$id_client, ':dateAchat'=>$dateAchat,':montantC'=>$montantC,':etatCommande'=>$etatCommande);
		$req->bindValue(':id_commandee',$id_commandee);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':dateAchat',$dateAchat);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':montantC',$montantC);
		
	$req->bindValue(':etat',$etat);
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	 function modifieretat($id,$etatCommande)
   {  
		$sql = "UPDATE commande SET etatCommande='$etatCommande' WHERE id_commande=:id_commande ";
	
	$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	
 }

		function recherchecommande($key)
		
  
      
	{
		$sql ="SELECT * FROM commande WHERE id_commande LIKE '%$key%' OR montantC LIKE '%$key%' OR dateAchat LIKE '%$key%' ";
  $db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;

		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

}

?>