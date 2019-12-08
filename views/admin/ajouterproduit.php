<?PHP
include "C:\wamp/www/entities/Produit.php" ;
include "C:\wamp\www\core\ProduitC.php" ;
	if (isset($_GET['ref']) and isset ($_GET['nom']) and isset ($_GET['prix'])and isset ($_GET['cat'])and isset ($_GET['img'])and isset ($_GET['qte']) )
{	
$Produit=new Produit($_GET['ref'],$_GET['nom'],$_GET['prix'],$_GET['cat'],$_GET['img'] ,$_GET['qte']);
$ProduitC=new ProduitC() ;
$ProduitC->AjouterProduit($Produit);
header ('Location: produits.html');
}
else
	{
		echo "vérifier les champs";	
	}


?>