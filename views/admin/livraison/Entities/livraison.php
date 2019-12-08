<?php

  class livraison
  {
	
	  private $name;
	  private $number;
	  private $town;
	  private $adresse;
	  private $ref;
	  function __construct($number,$town,$adresse,$name,$ref)
	  { 
	    
	    $this->number=$number;
		$this->town=$town;
		$this->adresse=$adresse;
	    $this->name=$name;
		$this->ref=$ref;
	  }
	  
	  function getNumber(){return $this->number;}
	  function getTown(){return $this->town;}
	  function getAdresse(){return $this->adresse;}
	  function getName(){return $this->name;}
	  function getRef(){return $this->ref;}
	  
	  
	  
	  
	  function setName($name){$this->name=$name;}
	  function setNumber($number){$this->number=$number;}
	  function setTown($town){$this->town=$town;}
	  function setAdresse($adresse){$this->adresse=$adresse;}



  }
?>