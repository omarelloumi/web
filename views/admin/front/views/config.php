<?php
 class config{
	   private static $instance = null ;
	   public static function getConnexion() {
	   
	                                          if(!isset (self::$instance))
											  {
												  try
      											  {self::$instance = new PDO ('mysql:host=localhost;dbname=web','root','');
												   self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //setAttribute bch n attributi ay haja ll instance, dans ce cas bch taatina les erreurs
												  }
												  catch(Exception $e)
												  {die('Erreur:'.$e->getMessage());} //getMessage tkharej les erreurs.. dima leska f exception
										       }
	   
                         return self::$instance;
	}}


?>