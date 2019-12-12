<?PHP
include "../base.php";
if (isset($_POST['id']) and isset($_POST['ref_produit']) and isset($_POST['commentaire'])){
$avis1=new Avis($_POST['id'],$_POST['ref_produit'],$_POST['commentaire']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$avis1C=new AvisC();
$avis1C->ajouterAvis($avis1);
	

header('Location: admin/tablesav.php');

}else{
	echo "VERIFIER LES CHAMPS";
}
//*/

?>