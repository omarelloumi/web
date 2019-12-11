<?php

  class reclamation
  {
	
	 
	  private $rec;
	  private $name;
	  
	  function __construct($rec,$name)
	  { 
		$this->rec=$rec;
		$this->name=$name;
	  }
	  
	  function getRec()
	  {
		  return $this->rec;
	  }
	  function getName()
	  {
		  return $this->name;
	  }


  }
?>