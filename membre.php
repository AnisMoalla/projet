<?php
include "config1.php";

class membrec
{
 function ajoutermembree($membre)
	{
		$sql = "insert into membres (cin,nom,prenom,mail,passe) values (:cin, :nom,:prenom,:mail,:passe)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$cin = $membre->getCin();
			$nom = $membre->getNom();
			$prenom = $membre->getPrenom();
            $mail = $membre->getmail();
            $passe = $membre->getpasse();
			
			$req->bindValue(':cin', $cin);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prenom', $prenom);
			
			
			
			$req->bindValue(':mail', $mail);
			
			$req->bindValue(':passe',$passe);

			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
    }
}
    ?>