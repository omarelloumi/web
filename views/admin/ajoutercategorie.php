<?PHP
include "../../entities/Categorie.php" ;
include "../..\core\CategorieC.php" ;
	if (isset($_GET['id']) and isset ($_GET['nom'])  )
{	
$Categorie=new Categorie($_GET['id'],$_GET['nom']);
$CategorieC=new CategorieC() ;
$CategorieC->AjouterCategorie($Categorie);
header ('Location: categories.html');
}
else
	{
		echo "vérifier les champs";	
	}


?>