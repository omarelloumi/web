<?php
include "config.php";

class panierC {
						 //$id_utilisateur,$produit
	function ajouteraupanier($id_client,$id_produit){

		$sql="insert into panier (id_produit,nom,prix,qte,id_client,img) values (:id_produit, :nom ,:prix,:qte,:id_client,:img)";
		$db = config::getConnexion();
		try
		{
		
        $req=$db->prepare($sql);
		$req->bindvalue(':nom',$nom);
		$req->bindvalue(':id_produit',$id_produit);
		$req->bindvalue(':qte',$qte);
		$req->bindvalue(':prix',$prix);
		$req->bindvalue(':img',$img);
            $req->execute();
           
        }
        catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function rechercherProduit1($Hi){
		$sql="SELECT * from produit where  Nom LIKE '%$Hi%'  order by Prix "   ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererproduit($id_produit)
	{
   		$sql="SELECT * from produit where id_produit=$id_produit";
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
		function recupererpanier($id_client)
	{
   		$sql="SELECT * from panier where id_client = $idclient";
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
	function somme($id_client)
	{
		$db=config::getConnexion();
		$q=$db->prepare("select qte from panier where id_client = $id_client");
		$q->execute();
		return $q;
	}

	function afficherproduit ($produit)
	{
		echo "id_produit : ".$produit->get_id_produit()."<br>";
		echo "nom : ".$produit->get_nom()."<br>";
		echo "Prix : ".$produit->get_prix()."<br>";
		echo "Quantite : ".$produit->get_quantite()."<br>";
		
	}
							//$id_utilisateur
	function afficherpanier()
	{
														//$id_utilisateur
		$sql="SElECT * From Panier ";
		
		$db = config::getConnexion();
		try{
			
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
							//$id_utilisateur
	function supprimerProduit($id_produit)
	{
		$sql="DELETE FROM Panier where id_produit= :id_produit" ;
		$db = config::getConnexion();
        
		try
		{
			$req=$db->prepare($sql);
			$req->bindValue(':id_produit',$id_produit);
			
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierquantite($quantite,$id_panier)
	{
		$sql="UPDATE panier SET qte=:qte where id_panier=:id_panier ";
		$db = config::getConnexion();
        
        try
        {
        	
        	$req=$db->prepare($sql);
        	$req->bindValue(':id_panier',$id_panier);
        	$req->bindValue(':qte',$qte);
        	
        	$s=$req->execute();

        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			//print_r($datas);
        }
	}
		function modifierp($quantite,$id_produit)
	{
		$sql="UPDATE produit SET quantite=:quantite where id_produit =:id_produit ";
		$db = config::getConnexion();
        
        try
        {
        	
        	$req=$db->prepare($sql);
        	$req->bindValue(':id_produit',$id_produit);
        	$req->bindValue(':quantite',$quantite);
        	
        	$s=$req->execute();

        }
        catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			//print_r($datas);
        }
	}
	

	function countpanier()
	{
		$sql="SELECT count(*) as cnt  from panier ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function supprimerpanier($idclient)
{
	$sql="DELETE FROM panier where idclient = :idclient";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idclient',$idclient);
		//$req->bindValue(':idclient',$idclient);
		try
		{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}

function afficherpromos(){
	//$sql="SElECT * From promo e inner join formationphp.promo a on e.cin= a.cin";
	$sql="SElECT * From promo";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}
	function verifierexitenceprod($id_client,$id_produit)
	{
		$sql="select count(*) as cnt from panier where id_client=:id_client and id_produit=:id_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
            return $req;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherproduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function rechercherListepaniers($id_client){
		$sql="SELECT * from panier where id_client=$id_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function ajouterligne($id_ligne,$id_produit,$qte,$prix)
	{
		
		$sql="insert into ligne_commande (id_ligne,id_produit,qte,prix) values (:id_ligne , :id_produit, :qte, :prix)";
		$db = config::getConnexion();
		
		try{
        $req=$db->prepare($sql);
		$req->bindvalue(':id_ligne',$id_ligne);
		$req->bindvalue(':id_produit',$produit);
		$req->bindvalue(':qte',$qte);
		$req->bindvalue(':prix',$prix);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
}

?>