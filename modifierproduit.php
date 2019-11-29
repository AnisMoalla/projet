<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
if (isset($_GET['idP'])){
	$produitC=new ProduitC();
    $result=$produitC->recupererproduit($_GET['idP']);
	foreach($result as $row){
		$idP=$row['idP'];
		$age=$row['age'];
		$type=$row['type'];
		$sexe=$row['sexe'];
		$pets=$row['pets'];
		$petsrace=$row['petsrace'];
		$prix=$row['prix'];
?>
<form method="POST">
<table>
<caption>Modifier Produit</caption>
<tr>
<td>identifiant</td>
<td><input type="number" name="idP" value="<?PHP echo $idP ?>"></td>
</tr>
<tr>
<td>Age</td>
<td><input type="number" name="age" value="<?PHP echo $age ?>"></td>
</tr>
<tr>
<td>Type</td>
<td><input type="text" name="type" value="<?PHP echo $type ?>"></td>
</tr>
<tr>
<td>Sexe</td>
<td><input type="text" name="sexe" value="<?PHP echo $sexe ?>"></td>
</tr>
<tr>
<td>Pets</td>
<td><input type="text" name="pets" value="<?PHP echo $pets ?>"></td>
</tr>
<tr>
	<td>Petsrace</td>
<td><input type="text" name="petsrace" value="<?PHP echo $petsrace ?>"></td>
</tr>
<tr>
	<td>Prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idP_ini" value="<?PHP echo $_GET['idP'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new Produit($_POST['idP'],$_POST['age'],$_POST['type'],$_POST['sexe'],$_POST['pets'],$_POST['petsrace'],$_POST['prix']);
	$produitC->modifierproduit($produit,$_POST['idP_ini']);
	echo $_POST['idP'];
	header('Location: afficherproduit.php');
}
?>
</body>
</HTMl>

