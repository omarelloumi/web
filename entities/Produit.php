<?php
class Produit
{
	public $Ref ;
	public $Nom ;
	public $Prix ;
	public $Cat;
	public $Img;
	public $Qte;
	public function getRef()
	{
		return $this->Ref ;
	}
	public function getNom()
	{
		return  $this->Nom ;
	}
	public function getPrix()
	{
		return $this->Prix ;
	}
	public function getCat()
	{
		return $this->Cat ;
	}
	public function getImg()
	{
		return $this->Img ;
	}
	public function getQte()
	{
		return $this->Qte ;
	}
	public function setRef($Ref)
	{
		$this->Ref=$Ref ;
	}
	public function setNom($Nom)
	{
		 $this->Nom=$Nom ;
	}
	public function setPrix($Prix)
	{
		$this->Prix=$Prix ;
	}
	public function setCat($Cat)
	{
		$this->Cat=$Cat ;
	}
	public function setImg($Img)
	{
		$this->Img=$Img ;
	}
	public function setQte($Qte)
	{
		$this->Qte=$Qte ;
	}
	public function __construct($Ref,$Nom,$Prix,$Cat,$Img,$Qte)
	{
		$this->Ref=$Ref ;
		 $this->Nom=$Nom ;
		$this->Prix=$Prix ;
		$this->Cat=$Cat;
		$this->Img=$Img ;
		$this->Qte=$Qte ;
	}
}
?>