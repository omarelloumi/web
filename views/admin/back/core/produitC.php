<?PHP
//include "config.php";
include "../entities/produit.php";
class ProduitC {
function afficherproduit ($produit){
		echo "Id: ".$produit->get_id_produit()."<br>";
		echo "Nom: ".$produit->getNom()."<br>";
		echo "Prix: ".$produit->getPrix()."<br>";
		echo "Quantite: ".$produit->getQuantite()."<br>";
	}
	
	function ajouterproduit($produit){
		$sql="INSERT INTO  produit (id_produit,nom,prix,quantite) VALUES (:id_produit, :nom,:prix ,:quantite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id=$produit->get_id_produit();
        $Nom=$produit->getnom();
        $Prix=$produit->getprix();
        $Quantite=$produit->getquantite();
       
        
       
      
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		
		
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
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
	function supprimerproduit($id_produit){
		$sql="DELETE FROM produit where id_produit= :id_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($produit,$Id){
		$sql="UPDATE Produit SET Id=:idd, Nom=:Nom,Prix=:Prix,Image=:Image , Quantite=:Quantite, Description=:Description, Type=:Type  WHERE Id=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$produit->getId();
        $Nom=$produit->getNom();
        $Prix=$produit->getPrix();
        $Image=$produit->getImage();
        $Quantite=$produit->getQuantite();
        $Description=$produit->getDescription();
        $Type=$produit->getType();
      
       
		$datas = array(':idd'=>$idd, ':Id'=>$Id, ':Nom'=>$Nom,':Prix'=>$Prix, ':Image'=> $Image, ':Description'=>$Description, ':Quantite'=>$Quantite, ':Type'=>$Type);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Image',$Image);
		$req->bindValue(':Description',$Description);
		$req->bindValue(':Quantite',$Quantite);
		$req->bindValue(':Type',$Type);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($id_produit){
		$sql="SELECT * from produit where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function RecupCategories()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
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
	
}

?>