<?PHP
class Commande{
	private $id_commande;
	private $id_client;
	private $dateAchat;
	private $montantC;

function __construct($id_client,$dateAchat,$montantC)
	{
		$this->id_client=$id_client;
		$this->dateAchat=$dateAchat;
		$this->montantC=$montantC;
		
	}

	
	
	function getidc(){
		return $this->id_commande;
	}
	function getidu(){
		return $this->id_client;
	}
	function getdate(){
		return $this->dateAchat;
	}
	function getMontantC(){
		return $this->montantC;
	}


	function setidc($id_commande){
		$this->id_commande=$id_commande;
	}
	function setidu($id_client){
		$this->id_client=$id_client;
	}
	function setdate($dateAchat){
		$this->dateAchat=$dateAchat;
	}
	function setMontantC($montantC){
		$this->montantC=$montantC;
	}
	
	
}

?>