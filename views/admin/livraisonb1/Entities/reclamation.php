<?php

  class reclamation
  {
	
	 private $name;
	 private $rec;
	  
	  function __construct($name,$rec)
	  { 
		$this->rec=$rec;
		$this->name=$name;
	  }
	  function getName()
	  {
		  return $this->name;
	  }
	  
	  function getRec()
	  {
		  return $this->rec;
	  }


  }
?>