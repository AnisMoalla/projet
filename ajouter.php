<?PHP
include "membre.php";
include "membrec.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail'])and isset($_POST['passe']) ){
$membre1=new membres($_POST['cin'],$_POST['nom'],$_POST['prenom'],  $_POST['mail'],$_POST['passe']);

$membre1c=new membrec();
$membre1c->ajoutermembree($membre1);
header('Location: index.php');
	
}else{
	echo "vérifier les champs";
}
