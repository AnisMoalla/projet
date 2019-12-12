<?PHP
include "../config.php";
class CategorieC {
function afficherCategorie ($categorie){
		echo "idC: ".$categorie->getidC()."<br>";
		echo "nomC: ".$categorie->getnomC()."<br>";
		echo "famille: ".$categorie->getfamille()."<br>";
		echo "image: ".$categorie->getimage()."<br>";

	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterCategorie($categorie){
		$sql="insert into categorie (idC,nomC,famille,image) values (:idC,:nomC,:famille,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idC=$categorie->getidC();
        $nomC=$categorie->getnomC();
        $famille=$categorie->getfamille();
        $image=$categorie->getimage();
		$req->bindValue(':idC',$idC);
		$req->bindValue(':nomC',$nomC);
		$req->bindValue(':famille',$famille);
		$req->bindValue(':image',$image);
			$req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessnomC();
        }
		

	
	function affichercategorie(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessnomC());
        }	
	}
	function supprimercategorie($idC){
		$sql="DELETE FROM categorie where idC= :idC";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idC',$idC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessnomC());
        }
	}
	function modifiercategorie($categorie,$idC){
		$sql="UPDATE categorie SET idC=:idC, nomC=:nomC,famille=:famille  WHERE idC=:idC";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idC=$categorie->getidC();
        $nomC=$categorie->getnomC();
        $famille=$categorie->getfamille();
        

$datas = array( ':idC'=>$idC, ':nomC'=>$nomC,':famille'=>$famille);
	
		$req->bindValue(':idC',$idC);
		$req->bindValue(':nomC',$nomC);
		$req->bindValue(':famille',$famille);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessnomC();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercategorie($idC){
		$sql="SELECT * from categorie where idC=$idC LIMIT 1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessnomC());
        }
	}
	
	function recherchercategorie($idC){
		$sql="SELECT * from categorie where idC=$idC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessnomC());
        }
	}

}
}
?>