<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/admin.php";
include "../core/adminC.php";
if (isset($_GET['cin'])){
	$adminC=new adminC();
    $result=$registreC->recupereradmin($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$mail=$row['mail'];
		$pass=$row['pass'];
		
?>
<form method="POST">
<table>
<caption>Modifier registre</caption>
<tr>
<td>cin</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>pass</td>
<td><input type="password" name="pass" value="<?PHP echo $pass ?>"></td>
</tr>
<!-- <tr>
	<td>Petsrace</td>
<td><input type="text" name="petsrace" value="<?PHP echo $petsrace ?>"></td>
</tr>
<tr>
	<td>Prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr> -->
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$admin=new admin($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['pass']);
	$registreC->modifieradmin($admin,$_POST['cin_ini']);
	echo $_POST['cin'];
	header('Location: afficheradmin.php');
}
?>
</body>
</HTMl>

