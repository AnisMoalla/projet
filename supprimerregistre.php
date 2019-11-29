<?PHP
include "../core/registreC.php";
$registreC=new RegistreC();
if (isset($_POST["cin"])){
	$registreC->supprimerregistre($_POST["cin"]);
	header('Location: afficherregistre.php');
}

?>