<?PHP
include "../base.php";
$reclamationC=new ReclamationC();
if (isset($_POST["id"])){
	$reclamationC->supprimerReclamation($_POST["id"]);
	header('Location: admin/tables.php');
}

?>
