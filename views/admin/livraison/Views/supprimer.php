<?PHP
include ("../Core/livraisonCore.php");


if(isset($_POST['id'])) 
{   
	
	$livraisonCore=new livraisonCore();
	$livraisonCore->supprimer($_POST['id']);
	header('Location: ../Views/afficher.php');
	
}
else
{
echo "error";
}

?>