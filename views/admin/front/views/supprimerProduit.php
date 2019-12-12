<?PHP
include "../core/panierC.php";

include "../entities/panier.php";
include "../entities/commande.php";
include "../core/commandeC.php";
//include "../entities/produit.php";
include "../core/produitC.php";

include"config.php";

$req="select * from panier";
$db=config::getConnection();
$listP=$db->query($req) ;
if (isset ($_POST['supprimer']))
{
   $req="delete from panier where nom=".$_POST['nom'];
   $db=config::getConnection($req);
   $sql=$db->prepare($req);
   $sql->execute();

    

}
?>