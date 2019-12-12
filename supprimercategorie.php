<?PHP
include "../core/categorieC.php";
$categorieC=new CategorieC();
if (isset($_POST["idC"])){
	$categorieC->supprimercategorie($_POST["idC"]);
	header('Location: affcategorie.php');
}

?>