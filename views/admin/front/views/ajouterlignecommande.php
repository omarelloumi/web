<?php 

include "../entities/Commande.php";
include "../core/CommandeC.php";
//include "config.php";
include "panier.class.php";
include "../entities/user.php";
include "../core/userC.php";
session_start();

$db = config::getConnexion();
  if (isset($_SESSION)){
$client=new user("1","kkk","mmm@mm.fr","1234","client");
$client=$_SESSION["connectedUserId"];
$panier=new panier($db);

$listProds=$panier->recupererpanier($client);
$ids = array_keys($_SESSION['panier']);



$sessList=$_SESSION['panier'];

$prixTot=0;
$i=0;
         foreach($sessList as $key => $qte){
         


           $prod=$listProds[$i];
            $prixTot+=$qte*$prod['prix'];
            $i++;
              
         }
$cmd=new commande($client,date("Y-m-d"),$prixTot);
              $cmdC=new commandeC();
              $cmdId=$cmdC->ajoutercommande($cmd);

        $_SESSION["cmdToNotif"]=$cmdId;

$i=0;
 foreach($sessList as $key => $qte){
        

           $idProd=$ids[$i];

           $cmdC->ajouterligne($idProd,$qte,$cmdId);
       $i++;
         }

         header("Location: checkout.php");


}
?>
