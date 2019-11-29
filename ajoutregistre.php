<?PHP
include "../entities/registre.php";
include "../core/registreC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['pass']))
{
$registre1=new Registre($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['pass']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$registre1C=new RegistreC();
$registre1C->ajouterRegistre($registre1);
header('Location: index.html');
// header('location:afficherregistre');
}else{
	echo "vérifier les champs";
}
//*/

?>

