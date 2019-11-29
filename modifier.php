<!DOCTYPE html>
<html lang="en">
  <head>
      <script src="condition.js"> </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="inscription.css" />
    <title>inscription</title>
  </head>
  <body class="bg-dark container">
  <div class="form-group">
  <?PHP
include "../entities/registre.php";
include "../core/registreC.php";
if (isset($_GET['cin'])){
    $registreC=new registreC();
    $result=$registreC->recupererregistre($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$mail=$row['mail'];
        $pass=$row['pass'];
        ?>
        <form method="POST">
        <h1>Modifier client</h1>
        <label>cin</label
          ><input type="number" name="cin" class="form-control" value="<?PHP echo $cin ?>" /> </br>
        <label>nom</label><input type="text" name="nom" class="form-control" value="<?PHP echo $nom ?>"/>
        <label>prenom</label><input type="text" name="prenom" class="form-control" value="<?PHP echo $prenom ?>"/>
        
        <label>Adresse mail </label><input type="text" name="mail" class="form-control"value="<?PHP echo $mail ?>" />
        <label>Mot de passe </label><input type="text" name="pass" class="form-control"value="<?PHP echo $pass ?>" />
       
        <td><input type="submit" name="modifier" value="modifier" ></td>
        <tr>
        <td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
        </tr>
      </form>
    </div>
    <?PHP
	}
}
if (isset($_POST['modifier'])){
	$registre=new registre($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['pass']);
	$registreC->modifierregistre($registre,$_POST['cin_ini']);
	echo $_POST['cin'];
	header('Location: afficherregistre.php');
}
?>
  </body>
</html>
    