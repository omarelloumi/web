<?PHP
include "../core/reclamationC.php";
$reclamation1C=new ReclamationC();
$listeRecalmations=$reclamation1C->afficherReclamations();


?>
<table border="1">
<tr>
<td>Id</td>
<td>Mail</td>
<td>Tel</td>
<td>Reclam</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeRecalmations as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['tel']; ?></td>
	<td><?PHP echo $row['reclam']; ?></td>
	
	<td><form method="POST" action="supprimerReclamation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierReclamation.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>

	<?PHP
}
?>
</table>
<input type="submit" name="trier" value="trier">
<a href="ajoutAvis.html">ajouter</a>