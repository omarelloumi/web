<?PHP
include ("../Core/livreurCore.php");


if(isset($_POST['id'])) 
{   
	
	$livreurCore=new livreurCore();
	$livreurCore->supprimer($_POST['id']);
	header('Location: ../Views/afficher.php');
	
}
else
{
echo "error";
}

?>