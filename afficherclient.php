<?PHP
include "../core/produitC.php";
$produit1C=new ProduitC();
$listeproduits=$produit1C->afficherproduits();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>idP</td>
<td>Age</td>
<td>Type</td>
<td>Sexe</td>
<td>Pets</td>
<td>Petsrace</td>
<td>Prix</td>
</tr>

<?PHP
foreach($listeproduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['idP']; ?></td>
	<td><?PHP echo $row['age']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['sexe']; ?></td>
	<td><?PHP echo $row['pets']; ?></td>
	<td><?PHP echo $row['petsrace']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idP']; ?>" name="idP">
	</form>
	</td>
	<td><a href="modifierproduit.php?idP=<?PHP echo $row['idP']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

