<?PHP
include "C:\wamp\www\core\ProduitC.php" ;
$ProduitC=new ProduitC();
if (isset($_POST["Id"])){
	$ProduitC->SupprimerProduit($_POST["Id"]);
	header('Location: afficherp.php');
}

?>