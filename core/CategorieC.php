<?PHP
include "C:\wamp\www\config.php" ;
class CategorieC
{
	function AjouterCategorie($Categorie)
	{
		$sql = "insert into categories (Id,Nom) values(:Id,:Nom)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':Id',$Categorie->getId()) ;
			$req->BindValue(':Nom',$Categorie->getNom()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	
	function AfficherCategories($Categorie)
	{
		echo "Id: ".$Categorie->getId()."<br>";
		echo "Nom: ".$Categorie->getNom()."<br>";
	
	}
	
	function AfficherCategorie()
	{
		$sql="SElECT * From categories";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function ModifierCategorie($Categorie,$Id)
{
		$sql="UPDATE categories SET Id=:Idd, Nom=:Nom WHERE Id=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Idd=$Categorie->getId();
        $Nom=$Categorie->getNom();
		$datas = array( ':Idd'=>$Idd,':Id'=>$Id, ':Nom'=>$Nom);
		$req->bindValue(':Id',$Id);
		$req->bindValue(':Idd',$Idd);
		$req->bindValue(':Nom',$Nom);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function SupprimerCategorie($Id)
	{
		$sql="DELETE FROM categories where Id= :Id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id',$Id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function RecupererCategorie($Id){
		$sql="SELECT * from categories where Id=$Id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function RechercherListeCategorie($Nom){
		$sql="SELECT * from categories where Nom=$Nom";
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