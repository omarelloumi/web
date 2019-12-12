<?PHP
include "../core/avisC.php";
$avis1C=new AvisC();
$listeAvis=$avis1C->afficherAvis();


?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>nb heures</td>
<td>tarif horaire</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeAvis as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	
	<td><?PHP echo $row['ref_produit']; ?></td>
	<td><?PHP echo $row['commentaire']; ?></td>
	
	<td><form method="POST" action="supprimerAvis.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierAvis.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>

	<?PHP
}
?>
</table>
<input type="submit" name="trier" value="trier">
<a href="ajoutAvis.html">ajouter</a>