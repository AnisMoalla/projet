<?PHP
include "../core/adminC.php";
$adminC=new AdminC();
$listeadmin=$adminC->afficheradmin();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>cin</td>
<td>nom</td>
<td>prenom</td>
<td>mail</td>
<td>pass</td>


</tr>

<?PHP
foreach($listeadmin as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['pass']; ?></td>

	
	<td><form method="POST" action="supprimeradmin.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifieradmin.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

