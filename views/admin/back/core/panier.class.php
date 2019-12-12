<?php
class panier {
	private $db;
	public function __construct($db){
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier']=array();
		}
		$this->db = $db ;
	}

    public function total (){
    	$total=0;
    	$ids=array_keys($_SESSION['panier']);
              if(empty($ids)){
              $liste = array();
          }else
          { 
           $liste = $this->db->query('SELECT id_produit,prix  FROM produit WHERE id_produit IN ('.implode(",", $ids).')')->fetchAll();
                     }
                     foreach($liste as $row)
                     {
                     	$total+=$row['prix']* $_SESSION['panier'][$row['id_produit']];
                     }
                     return $total;
    }


public function add($liste_id_produit){
	if (isset($_SESSION['panier'][$liste_id_produit])){
		$_SESSION['panier'][$liste_id_produit]=$_SESSION['panier'][$liste_id_produit]+1; 
		
	}else
 $_SESSION['panier'][$liste_id_produit]=1;

 var_dump($_SESSION['panier']);

}
   public function del($liste_id_produit){
   	unset($_SESSION['panier'][$liste_id_produit]);
   	
   }

   function recupererpanier($id_client)
  {
 
      
                     $ids = array_keys($_SESSION['panier']);
                     if(empty($ids)){
                        $liste = array();
                     }else
                      {

                     
                     $liste = $this->db->query('SELECT * FROM produit WHERE id_produit IN ('.implode(",", $ids).')')->fetchAll();
                     }
                    

  
    return $liste;
    
  }
public function modifier($id_produit,$newQte){


    $_SESSION['panier'][$id_produit]=$newQte;


   }







   } 

?>