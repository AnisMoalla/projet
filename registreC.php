<?PHP
include "../config.php";
class RegistreC {
function afficherRegistre ($registre){
		echo "cin: ".$registre->getCin()."<br>";
		echo "nom: ".$registre->getNom()."<br>";
		echo "prenom: ".$registre->getPrenom()."<br>";
		echo "mail: ".$registre->getMail()."<br>";
		echo "pass: ".$registre->getPass()."<br>";
		

	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterRegistre($registre){
		$sql="insert into registre (cin,nom,prenom,mail,pass) values (:cin,:nom,:prenom,:mail,:pass)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $cin=$registre->getCin();
        $nom=$registre->getNom();
        $prenom=$registre->getPrenom();
        $mail=$registre->getMail();
        $pass=$registre->getPass();
        
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':pass',$pass);
		
			$req->execute();
         /* if(move_uploaded_file($_FILES['tmp_name']['name'], $target)) {
          	$msg="aaaa" ;
          }
          else{
          	$msg="laaa" ; 
          }*/
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherregistres(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From registre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerregistre($cin){
		$sql="DELETE FROM registre where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierregistre($registre,$cin){
		$sql="UPDATE registre SET cin=:cin, nom=:nom,prenom=:prenom,mail=:mail,pass=:pass  WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cin=$registre->getCin();
        $nom=$registre->getNom();
        $prenom=$registre->getPrenom();
        $mail=$registre->getMail();
        $pass=$registre->getPass();

$datas = array( ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':mail'=>$mail,':pass'=>$pass);
	
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':pass',$pass);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererregistre($cin){
		$sql="SELECT * from registre where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeregistres($cin){
		$sql="SELECT * from registre where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessnom());
        }
	}

}
?>