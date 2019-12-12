<?PHP

class AvisC {
function afficherAvi ($avis){
		echo "iD: ".$avis->getId()."<br>";
		
		echo "Ref produit: ".$employe->getRef_produit()."<br>";
		echo "Commentaire: ".$employe->getCommentaire()."<br>";
		
	}
	
	function ajouterAvis($avis){
		$sql="insert into avis (id,ref_produit,commentaire) values (:id,:ref_produit,:commentaire)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		
        $id=$avis->getId();
        
        $ref_produit=$avis->getRef_produit();
        $commentaire=$avis->getCommentaire();
        
		$req->bindValue(':id',$id);
		
		$req->bindValue(':ref_produit',$ref_produit);
		$req->bindValue(':commentaire',$commentaire);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherAvis(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerAvis($id){
		$sql="DELETE FROM avis where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAvis($avis,$id){
		$sql="UPDATE avis SET id=:idd,ref_produit=:ref_produit,commentaire=:commentaire WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$avis->getId();
        
        $ref_produit=$avis->getRef_produit();
        $commentaire=$avis->getCommentaire();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':ref_produit'=>$ref_produit,':commentaire'=>$commentaire);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':ref_produit',$ref_produit);
		$req->bindValue(':commentaire',$commentaire);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererAvis($id){
		$sql="SELECT * from avis where id=$id";
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