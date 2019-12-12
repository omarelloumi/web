<?PHP

class ReclamationC {
function afficherReclamation ($reclamation){
		echo "Id: ".$reclamation->getId()."<br>";
		echo "Mail: ".$reclamation->getMail()."<br>";
		echo "Tel: ".$reclamation->getTel()."<br>";
		echo "Reclam: ".$reclamation->getReclam()."<br>";
		
	}
	
	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (id,mail,tel,reclam) values (:id, :mail,:tel,:reclam)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		
        $id=$reclamation->getId();
        $mail=$reclamation->getMail();
        $tel=$reclamation->getTel();
        $reclam=$reclamation->getReclam();
        
		$req->bindValue(':id',$id);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':reclam',$reclam);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($id){
		$sql="DELETE FROM reclamation where id= :id";
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
	function modifierReclamation($reclamation,$id){
		$sql="UPDATE reclamation SET id=:idd, mail=:mail ,tel=:tel,reclam=:reclam WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$reclamation->getId();
        $mail=$reclamation->getMail();
        $tel=$reclamation->getTel();
        $reclam=$reclamation->getReclam();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':mail'=>$mail,':tel'=>$tel,':reclam'=>$reclam);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':reclam',$reclam);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		}


function recupererReclamation($id){
		$sql="SELECT * from reclamation where id=$id";
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