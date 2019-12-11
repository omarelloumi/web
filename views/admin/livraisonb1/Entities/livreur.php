<?php

  class livreur
  {
	  private $number;
	  private $town;
	  private $name;
	  private $ref;
	  function __construct($number,$town,$name,$ref)
	  { 
	    $this->number=$number;
		$this->town=$town;
	    $this->name=$name;
		$this->ref=$ref;
	  }
	  
	  function getNumber(){return $this->number;}
	  function getTown(){return $this->town;}
	  function getName(){return $this->name;}
	  function getRef(){return $this->ref;}
	  
	 
	  function setNumber($number){$this->number=$number;}
	  function setTown($town){$this->town=$town;}
	  function setName($name){$this->name=$name;}
	  function setRef($ref){$this->ref=$ref;}



  }
?>