<?PHP
class panier{
	private $id_panier;
	private $id_client;
	private $id_produit;
	private $qte;
	private $prix;
	function __construct($id_client,$id_produit,$qte,$prix,$nom,$img){
		$this->id_client=$id_client;
		$this->id_produit=$id_produit;
		$this->qte=$qte;
		$this->prix=$prix;
		$this->nom=$nom;
		$this->img=$img;
	}
	public function get_id_client()
		{
			return $this->id_client;
		}
	public function get_id_produit()
		{
			return $this->id_produit;
		}

	public function get_qte()
	{
		return $this->qte;
	}
	public function getprix()
	{
		return $this->prix;
	}
	public function getnom()
	{
		return $this->nom;
	}
	public function getimg()
	{
		return $this->img;
	}
	public function set_id_client($id_client)
		{
			$this->id_client= $id_client;
		}
	public function setPrix($prix)
		{
			$this->prix = $prix;
		}
	public function get_id_panier()
		{
			return $this->id_panier;
		}
	public function set_id_produit($id_produit)
		{
			$this->id_produit = $id_produit;
		}
	public function set_qte($qte)
		{
			$this->qte = $qte;
		}
		public function set_nom($nom)
		{
			$this->nom = $nom;
		}
		public function set_img($img)
		{
			$this->img = $img;
		}
	
}

?>