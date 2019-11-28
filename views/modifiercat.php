<?PHP
include "C:\wamp\www\core\CategorieC.php" ;
if (isset($_POST['modifier'])){
	$Categorie=new Categorie($_POST['Id'],$_POST['Nom']);
	$CategorieC->ModifierCategorie($Categorie,$_POST['Idd']);
	echo $_POST['Idd'];
	header('Location: categories.html');
}?>