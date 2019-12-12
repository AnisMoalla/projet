<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
if (isset($_GET['idC'])){
	$categorieC=new CategorieC();
    $result=$categorieC->recuperercategorie($_GET['idC']);
	foreach($result as $row){
		$idP=$row['idC'];
		$age=$row['nomC'];
		$type=$row['famille'];
	
?>
<form method="POST">
<table>
<caption>Modifier Produit</caption>
<tr>
<td>identifiant</td>
<td><input type="number" name="idC" value="<?PHP echo $idC ?>"></td>
</tr>
<tr>
<td>nomC</td>
<td><input type="text" name="nomC" value="<?PHP echo $nomC ?>"></td>
</tr>
<tr>
<td>famille</td>
<td><input type="text" name="famille" value="<?PHP echo $famille ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idC_ini" value="<?PHP echo $_GET['idC'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$categorie=new Categorie($_POST['idC'],$_POST['nomC'],$_POST['famille']);
	$categorieC->modifiercategorie($categorie,$_POST['idC_ini']);
	echo $_POST['idC'];
	header('Location: affcategorie.php');
}
?>
</body>
</HTMl>

