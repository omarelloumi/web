<?PHP
include "C:\wamp\www\config.php" ;
class ProduitC
{
	function AjouterProduit($Produit)
	{
		$sql = "insert into produits (ref,nom,prix,cat,img) values(:Ref,:Nom,:Prix,:Cat,:Img)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':Ref',$Produit->getRef()) ;
			$req->BindValue(':Nom',$Produit->getNom()) ;
			$req->BindValue(':Prix',$Produit->getPrix()) ;
			$req->BindValue(':Cat',$Produit->getCat()) ;
			$req->BindValue(':Img',$Produit->getImg()) ;
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
	}
	
	function AfficherProduit()
	{
		$sql="SElECT * From produits";
		$db = config::getConnexion();
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
		$sql="UPDATE produits SET Ref=:Reff, Nom=:Nom,Prix=:Prix ,Cat=:Cat ,Img=:Img WHERE Ref=:Ref";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Reff=$Produit->getRef();
        $Nom=$Produit->getNom();
        $Prix=$Produit->getPrix();
		$Cat=$Produit->getCat();
		$Img=$Produit->getImg();
		$datas = array(':Reff'=>$Reff, ':Ref'=>$Ref, ':Nom'=>$Nom,':Prix'=>$Prix,':Cat'=>$Cat,':Img'=>$Img);
		$req->bindValue(':Reff',$Reff);
		$req->bindValue(':Ref',$Ref);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Cat',$Cat);
		$req->bindValue(':Img',$Img);
		
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
		$db = config::getConnexion();
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
		$db = config::getConnexion();
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