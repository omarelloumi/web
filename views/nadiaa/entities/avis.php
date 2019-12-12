<?PHP
class Avis{
	private $id;
	
	private $ref_produit;
	private $commentaire;
	function __construct($id,$ref_produit,$commentaire){
		$this->id=$id;
		$this->ref_produit=$ref_produit;
		$this->commentaire=$commentaire;
		
	}
	
	function getId(){
		return $this->id;
	}
	
	function getRef_produit(){
		return $this->ref_produit;
	}
	function getCommentaire(){
		return $this->commentaire;
	}
	

	function setRef_produit($ref_produit){
		$this->ref_produit=$ref_produit;
	}
	function setCommentaire($commentaire){
		$this->commentaire;
	}
	
	
}

?>