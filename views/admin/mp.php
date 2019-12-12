<?PHP
include "../../entities/Produit.php" ;
include "../..\core\ProduitC.php" ;
if (isset($_POST['modifier'])){
		$ProduitC=new ProduitC();

	$Produit=new Produit($_POST['Ref'],$_POST['Nom'],$_POST['Prix'],$_POST['Cat'],$_POST['Img'],$_POST['Qte']);
	$ProduitC->ModifierProduit($Produit,$_POST['Idd']);
	//echo $_POST['Idd'];
	header('Location: afficherp.php');
}