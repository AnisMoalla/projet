<?PHP
include "../entities/admin.php";
include "../core/adminC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['pass']))
{
$admin1=new Admin($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['pass']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$adminC=new AdminC();
$adminC->ajouterAdmin($admin1);
// header('Location: index.html');
 header('location:afficheradmin');
}else{
	echo "vérifier les champs";
}
//*/

?>
