<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if (isset($_POST['idC']) and isset($_POST['nomC']) and isset($_POST['famille']) and isset($_FILES['uploadedfile']))
{
$categorie1=new Categorie($_POST['idC'],$_POST['nomC'],$_POST['famille'],$_FILES['uploadedfile']['name']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

$categorie1C=new CategorieC();
$categorie1C->ajouterCategorie($categorie1);
header('Location: affichercategorie.php');
	
}else{
	echo "vérifier les champs";
}
//*/


?>

