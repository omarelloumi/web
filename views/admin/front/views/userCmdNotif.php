<?php


include "config.php";

session_start();
$db=config::getconnexion();
        

$cmdId=$_SESSION["cmdToNotif"];
$sql="SELECT etatCommande from commande where id_commande=$cmdId";

$res=$db->query($sql);

	foreach ($res as $key => $value) {
	echo $value[$key];
	if($value[$key]=="valide")
	{
$_SESSION["cmdToNotif"]="-1";
	}


	}
//sleep(1);





?>