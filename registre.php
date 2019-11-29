<?PHP
class Registre{
	private $cin;
	private $nom;
	private $prenom;
	private $mail;
	private $pass;
	function __construct($cin,$nom,$prenom,$mail,$pass){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;
		$this->pass=$pass;
		
	}
	function getCin(){
		return $this->cin;
	}
	
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	
	function getMail(){
		return $this->mail;
	}
	function getPass(){
		return $this->pass;
	}
	
	function setCin($cin){
		$this->cin=$cin;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	
	function setMail($mail){
		$this->mail=$mail;
	}
	function setPass($pass){
		$this->pass=$pass;
	}
	
	
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>