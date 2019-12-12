<?PHP
include "../../entities/Categorie.php" ;
include "../..\core\CategorieC.php" ;
if (isset($_POST['modifier'])){
	$Categorie=new Categorie($_POST['Id'],$_POST['Nom']);
		$CategorieC=new CategorieC();

	$CategorieC->ModifierCategorie($Categorie,$_POST['Idd']);
	//echo $_POST['Idd'];
	header('Location: afficherc.php');
}?>