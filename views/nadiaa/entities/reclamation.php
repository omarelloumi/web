<?PHP
class Reclamation{
	private $id;
	private $mail;
	private $tel;
	private $reclam;
	function __construct($id,$mail,$tel,$reclam){
		$this->id=$id;
		$this->mail=$mail;
		$this->tel=$tel;
		$this->reclam=$reclam;
		
	}
	
	function getId(){
		return $this->id;
	}
	function getMail(){
		return $this->mail;
	}
	function getTel(){
		return $this->tel;
	}
	function getReclam(){
		return $this->reclam;
	}
	
    function setId($id){
    	$this->id=$id;
    }
	function setMail($mail){
		$this->mail=$mail;
	}
	function setTel($tel){
		$this->tel=$tel;
	}
	function setReclam($reclam)
	{
		$this->reclam=$reclam;
	}
	
	
}

?>