<?PHP
include "C:\wamp\www\config1.php" ;
class ProduitC
{
	function AjouterProduit($Produit)
	{
		$sql = "insert into produits (ref,nom,prix,cat,img,qte) values(:Ref,:Nom,:Prix,:Cat,:Img,:Qte)";
		$db = config1::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':Ref',$Produit->getRef()) ;
			$req->BindValue(':Nom',$Produit->getNom()) ;
			$req->BindValue(':Prix',$Produit->getPrix()) ;
			$req->BindValue(':Cat',$Produit->getCat()) ;
			$req->BindValue(':Img',$Produit->getImg()) ;
			$req->BindValue(':Qte',$Produit->getQte()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	
	function AfficherProduits($Produit)
	{
		echo "Ref: ".$Produit->getRef()."<br>";
		echo "Nom: ".$Produit->getNom()."<br>";
		echo "Prix: ".$Produit->getPrix()."<br>";
		echo "Cat: ".$Produit->getCat()."<br>";
		echo "Img: ".$Produit->getImg()."<br>";
		echo "Qte: ".$Produit->getQte()."<br>";
	}
	
	function AfficherProduit()
	{
		$sql="SElECT * From produits";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function ModifierProduit($Produit,$Ref)
{
		$sql="UPDATE produits SET Ref=:Reff, Nom=:Nom,Prix=:Prix ,Cat=:Cat ,Img=:Img, Qte=:Qte WHERE Ref=:Ref";
		
		$db = config1::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Reff=$Produit->getRef();
        $Nom=$Produit->getNom();
        $Prix=$Produit->getPrix();
		$Cat=$Produit->getCat();
		$Img=$Produit->getImg();
		$Qte=$Produit->getQte();
		$datas = array(':Reff'=>$Reff, ':Ref'=>$Ref, ':Nom'=>$Nom,':Prix'=>$Prix,':Cat'=>$Cat,':Img'=>$Img,':Qte'=>$Qte);
		$req->bindValue(':Reff',$Reff);
		$req->bindValue(':Ref',$Ref);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Cat',$Cat);
		$req->bindValue(':Img',$Img);
		$req->bindValue(':Qte',$Qte);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function SupprimerProduit($Ref)
	{
		$sql="DELETE FROM produits where Ref= :Ref";
		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Ref',$Ref);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function RecupererProduit($Ref){
		$sql="SELECT * from produits where Ref=$Ref";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function RechercherListeProduit($Nom){
		$sql="SELECT * from produits where Nom=$Nom";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function RechercherListecProduit($Nom){
		$sql="SELECT * from produits where cat=$Nom";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function RechercherP($key){
		$sql="SELECT * from produits where ref LIKE '%$key%' OR nom LIKE '%$key%' OR prix LIKE '%$key%' OR qte LIKE '%$key%'";
		$db = config1::getConnexion();
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