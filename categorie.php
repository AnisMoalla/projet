<?PHP
class Categorie{
	private $idC;
	private $nomC;
	private $famille;
	private $image;
	function __construct($idC,$nomC,$famille,$image)
	{
		$this->idC=$idC;
		$this->nomC=$nomC;
		$this->famille=$famille;
		$this->image=$image;
	}
	
	function getidC(){
		return $this->idC;
	}
	function getnomC(){
		return $this->nomC;
	}
	function getfamille(){
		return $this->famille;
	}
	function getimage(){
		return $this->image;
	}

	function setidC($idC){
		$this->idC=$idC;
	}
	function setnomC($nomC){
		$this->nomC=$nomC;
	}
	function setfamille($famille){
		$this->famille=$famille;
	}
	function setimage($image){
		$this->image=$image;
	}
	
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>