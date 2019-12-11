<?php

  class livraison
  {
	
	  private $name;
	  private $number;
	  private $town;
	  private $adresse;
	  private $ref;
	  private $datel;
	  private $cost;
	  function __construct($number,$town,$adresse,$name,$ref,$datel,$cost)
	  { 
	    
	    $this->number=$number;
		$this->town=$town;
		$this->adresse=$adresse;
	    $this->name=$name;
		$this->ref=$ref;
		$this->datel=$datel;
		$this->cost=$cost;
	  }
	  
	  function getNumber(){return $this->number;}
	  function getTown(){return $this->town;}
	  function getAdresse(){return $this->adresse;}
	  function getName(){return $this->name;}
	  function getRef(){return $this->ref;}
	  function getDatel(){return $this->datel;}
	  function getCost(){return $this->cost;}
	  
	  
	  
	  
	  
	  function setName($name){$this->name=$name;}
	  function setNumber($number){$this->number=$number;}
	  function setTown($town){$this->town=$town;}
	  function setAdresse($adresse){$this->adresse=$adresse;}



  }
?>