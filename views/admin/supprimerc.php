<?PHP
include "../..\core\CategorieC.php" ;
$CategorieC=new CategorieC();
if (isset($_POST["Id"])){
	$CategorieC->SupprimerCategorie($_POST["Id"]);
	header('Location: afficherc.php');
}

?>