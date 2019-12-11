<?PHP
include ("../Core/livraisonCore.php");


if(isset($_POST['name'])) 
{   
	
	$livraisonCore=new livraisonCore();
	$livraisonCore->supprimer2($_POST['name']);
	header('Location: ../Views/reclamation.php');
	
}
else
{
echo "error";
}

?>