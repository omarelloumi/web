<?php
class Categorie
{
	private $Id ;
	private $Nom ;
	public function getId()
	{
		return $this->Id ;
	}
	public function getNom()
	{
		return  $this->Nom ;
	}
	public function setId($Id)
	{
		$this->Id=$Id ;
	}
	public function setNom($Nom)
	{
		 $this->Nom=$Nom ;
	}
	public function __construct($Id,$Nom)
	{
		$this->Id=$Id ;
		 $this->Nom=$Nom ;
	}
}
?>