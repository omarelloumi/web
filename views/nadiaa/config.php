<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      $servername = "localhost";
$username = "root";

      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO("mysql:host=$servername;dbname=nadia", $username, '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
?>