<?PHP
class produit{
	private $id_produit;
	private $nom;
	private $prix;
	private $quantite; 

	function __construct($id_produit,$nom,$prix,$quantite){
		$this->id_produit=$id_produit;
		$this->nom=$nom;
		$this->prix=$prix;
		$this->quantite=$quantite;
	}
	public function get_id_produit()
		{
			return $this->id_produit;
		}
	public function getNom()
		{
			return $this->nom;
		}

	public function get_prix()
	{
		return $this->prix;
	}	
	public function getQuantite()
		{
			return $this->quantite;
		}
	public function setPrix($prix)
		{
			$this->prix = $prix;
		}
	public function setNom($nom)
		{
			$this->nom = $nom;
		}
	public function setQuantite($quantite)
		{
			$this->quantite = $quantite;
		}
}

?>