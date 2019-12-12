<?PHP
include "../core/commandeC.php";
$commandeC=new commandeC();
if (isset($_POST["id"])){
	$commandeC->supprimercommande($_POST["id"]);
	header('Location: ../views/tables-commande.php');
}

?>