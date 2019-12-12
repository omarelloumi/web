<?PHP

include "../back/Core/CommandeC.php";
include "../back/Entities/commande.php";
//include "config.php";
include "../back/core/userC.php";
//include_once"../back/core/produitC";
session_start();
$_SESSION['id_produit']=2;
//if(isset($_SESSION['id']))
//{
$db = config::getConnexion();

if(isset($_SESSION['id_commande']))
	//var_dump($_SESSION['id_produit']);
{$produitC=new produitC();

	$commandeC=new commandeC($db);
if (isset($_POST["valider"]))
{

	$commande=$commandeC->recuperercommande($_POST["id_Commande"]);
	$info=$commande->fetch();
	var_dump($info);
	$commande=new commande($info["id_Commande"],$info["dateAchat"],$info["montantC"],$info["etatCommande"]);
	$valider="Valider";
	$commande->set_etatCommande($valider);
	$dateactuelle = date("Y-m-d");
	$commande->set_dateCommande($dateactuelle);
	
	



	//$commandeC->ajouterhistorique($commande);
	//$commandeC->supprimercommande($_POST["idCommande"]);
	//header('Location: affichercommande.php');
}

/*if ($valider="Validee")
{

include "../Nexmo/src/NexmoMessage.php" ;

/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	//$nexmo_sms = new NexmoMessage('767b4bec','6wLOyMQIPaaYMXyV');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	//$info = $nexmo_sms->sendText( '21626041010', 'Banette', 'Votre commande a été Validée ' );

	// Step 3: Display an overview of the message
	

	// Done!  


}
?>

