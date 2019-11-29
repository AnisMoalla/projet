<?PHP
include "../core/adminC.php";
$adminC=new AdminC();
if (isset($_POST["cin"])){
	$adminC->supprimeradmin($_POST["cin"]);
	header('Location: afficheradmin.php');
}

?>