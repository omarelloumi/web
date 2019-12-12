<?php
	 function query($sql,$data = array()){
		$req =$this->db->prepare($sql);
		$req->execute($data);
		//var_dump($req->fetchAll());
	}		
?>

<?php
session_start();
require 'panier.class.php';
include 'config.php';
$panier = new panier($db);

  $db = config::getConnexion();	
	


  if (isset($_POST['item_id']))
  {   
  	$ok=$_POST['item_id'];	  
  /*//SELECT id_produit FROM produit where id_produit=:id_produit', array('id_produit' => $_GET['id_produit']
  $query ="SELECT * FROM produit where id_produit=$ok";
 $liste=$db->query($query);    

$result = $liste->fetchAll();
    
     
/*('<input type="hidden" value="');
 echo $nom; 
 echo('" name="nom">');*/
  


      /*     
      if (empty($liste)){
      	die("ce produit n'existe pas");

      }
      */
 $salut=$panier->add($ok);
      
     // die('le prod a bien ajouté <a href="shop.php"> Retour </a>');
    
    header('Location:  shop.php');

 	
  	
  }

   else{
   	die('impo');
   }

