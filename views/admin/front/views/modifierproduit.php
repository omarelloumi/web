<?php

include "panier.class.php";
include "config.php";

$db = config::getConnexion();


if(isset($_POST['quantite']))
{

	$qte=$_POST['quantite'];

	if(isset($_POST['qteId']))
	{

		$idqte=$_POST['qteId'];

		$panier=new panier($db);

		$panier->modifier($idqte,$qte);


	}


}
else
{
	echo "error";
}

    header('Location:  checkout.php');


?>