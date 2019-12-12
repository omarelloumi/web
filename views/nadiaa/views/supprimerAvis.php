<?PHP
include "../base.php";
$avisC=new AvisC();
if (isset($_POST["id"])){
	$avisC->supprimerAvis($_POST["id"]);
	header('Location: admin/tablesav.php');
}

?>