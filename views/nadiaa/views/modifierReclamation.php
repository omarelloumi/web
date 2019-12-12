<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";
if (isset($_GET['id'])){
	$reclamationC=new ReclamationC();
    $result=$reclamationC->recupererReclamation($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$mail=$row['mail'];
		$tel=$row['tel'];
		$reclam=$row['reclam'];
?>
<form method="POST">
<table>
<caption>Modifier Reclamation</caption>
<tr>
<td>ID</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>MAIL</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>TEL</td>
<td><input type="number" name="tel" value="<?PHP echo $tel ?>"></td>
</tr>
<tr>
<td>RECLAM</td>
<td><input type="text" name="reclam" value="<?PHP echo $reclam ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reclamation=new Reclamation($_POST['id'],$_POST['mail'],$_POST['tel'],$_POST['reclam']);
	$reclamationC->modifierReclamation($reclamation,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherReclamation.php');
}
?>
</body>
</HTMl>