<?PHP
include "../base.php";

if (isset($_POST['submit']) and isset($_POST['id']) and isset($_POST['mail']) and isset($_POST['tel']) and isset($_POST['reclam'])){
$reclamation1=new Reclamation($_POST['id'],$_POST['mail'],$_POST['tel'],$_POST['reclam']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$to='nedia.wanness39@gmail.com' ;
$sujet='test mail en local' ;
$texte=$_POST['reclam'];
$header='From : test@gmail.com';
mail($to,$sujet,$texte,$header);
if(mail($to, $sujet, $texte, $header)){
	echo"envoyéééé";
}
$reclamation1C=new ReclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
header('Location: admin/tables.php');

}else{
	echo "vérifier les champs";
}
//*/

?>