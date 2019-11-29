<?PHP
class membres
{
	private $cin;
	private $nom;
	private $prenom;
	
	
	private $mail;

	private $passe;
	
	
	function __construct($cin,$nom,$prenom,$email,$passe){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		
		$this->email=$email;
		$this->passe=$passe;
		
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
	
	function getmail(){
		return $this->mail;
	}
	function getpasse(){
		return $this->passe;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	
	
	
	function setmail($mail){
		$this->mail=$mail;
	}
	function setpasse($passe){
		$this->passe=$passe;
	}
}

?>