<?PHP
include "../config.php";
class AdminC {
function afficherAdmin ($admin){
		echo "cin: ".$registre->getCin()."<br>";
		echo "nom: ".$registre->getNom()."<br>";
		echo "prenom: ".$registre->getPrenom()."<br>";
		echo "mail: ".$registre->getMail()."<br>";
		echo "pass: ".$registre->getPass()."<br>";
		

	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterAdmin($admin){
		$sql="insert into admin (cin,nom,prenom,mail,pass) values (:cin,:nom,:prenom,:mail,:pass)";
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
	
	function afficheradmin(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From admin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimeradmin($cin){
		$sql="DELETE FROM admin where cin= :cin";
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
	function modifieradmin($admin,$cin){
		$sql="UPDATE admin SET cin=:cin, nom=:nom,prenom=:prenom,mail=:mail,pass=:pass  WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cin=$admin->getCin();
        $nom=$admin->getNom();
        $prenom=$admin->getPrenom();
        $mail=$admin->getMail();
        $pass=$admin->getPass();

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
	function recupereradmin($cin){
		$sql="SELECT * from admin where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeadmin($cin){
		$sql="SELECT * from admin where cin=$cin";
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