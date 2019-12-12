

<?PHP
//include "../core/panierC.php";
//include "../entities/panier.php";
// if(is_int($_POST['qte'])==false)
	// {
		// header('Location: affichererreur1.php');
		// die;
	// }
//$panier1=new panier($_POST['id_produit'],$_POST['qte'],$_POST['prix']);
//$panier1C=new panierC();
//$panier1C->ajouterPanier($_POST['id_utilisateur'],$_POST['id_produit'],$_POST['qte'],$_POST['prix']);
//header('Location: shop.php');


include "../entities/panier.php";
include "../core/panierC.php";
include "../entities/commande.php";
include "../core/commandeC.php";
//include "../entities/produit.php";
include "../core/produitC.php";
session_start();
if($_GET['id_produit']){
$id_utilisateure=$_SESSION["connectedUserId"];
$id_produit=$_GET['id_produit'];
$prod=new ProduitC();
$res=$prod->recupererproduit($id_produit);
foreach ($res as $row) {
	$prix=$row['prix'];
  

$prod=new ProduitC();
//$prodd=new ProduitC();
$pan=new panierC();
$pann=new panierC();
$qte=$pan->countpanier($id_utilisateure);
foreach ($qte as $row) {
	$qte=$row[0];

}}
var_dump($id_utilisateure,$qte,$id_produit,$prix);
$h=$pann->ajouterPanier($id_utilisateure,$qte,$id_produit,$prix);
  

  








/*$test=new panier();
$pann->ajouterPanier($test);*/

}
//$quantite=$_POST['quantite'];
//$prix=$_POST['prix'];



/*
$produitC=new panierC();
$id_prod=$_SESSION["id_produit"];
$qua=$_SESSION["qte"];
$pri=$_SESSION["prix"];
$produit1=$produitC->recupererpanier($_SESSION["connectedUserId"]);
//$prod=$produitC->ajouterPanier($_SESSION["connectedUserId"],$qua,$pri);
$id_produit=$test->recupererproduit
 $count=$produitC->countpanier($_SESSION["connectedUserId"]);
                 // foreach($count as $row)
                    //{
                   //   $c=$row["cnt"];
                      var_dump($prod);
                   // }
/*if($c==0)
{
  echo ("<script> alert(\"vous n'avez rien commander" .var_dump($c)." \") </script>");
echo("<script> document.location.replace(\"shop.php\")</script>");
}
else
{*/
  /*$tab=array();
  $somme=0;

  foreach ($produit1 as $row) 
  {
    array_push($tab,$row['prix']*$row['quantite']);
    $somme+=$row['prix']*$row['quantite'];
  }
$dateAchat=date("Y-m-d");
$commande1C=new commandeC();
$commande1= new commande($somme,$dateAchat);
$commande1C->ajoutercommande($commande1,$_SESSION["connectedUserId"]); 
$lastID=$commande1C->recupererdernierID();
$max=$lastID->fetch();
$max_row=$max["max"];
var_dump($max_row); 

 $produit1=$produitC->recupererpanier($_SESSION["connectedUserId"]);
    
    foreach($produit1 as $row)
    {$idproduit=$row["id"];
      $newq=$row["quantite"];
      $produit2=new panier($row["id"],$row["nom"],$row["quantite"],$row["prix"]);
      $produitC->ajoutercontenupanier($produit2,$max_row,$_SESSION["connectedUserId"]);
      $louay=$produitC->recupererproduit($idproduit);
foreach ($louay as $row)
{
$q=$row["quantite"];  
}
$siwar=$q-$newq;
$jassrm=$produitC->modifierp($siwar,$idproduit) ;
    }
    
    $maha=$produitC->supprimerpanier($_SESSION["connectedUserId"]);
     

//}*/
    header('Location:  shop.php');

?>