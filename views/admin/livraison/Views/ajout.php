<?php

include('../Core/livraisonCore.php');


if(isset($_POST['number']) && isset($_POST['town'])&& isset($_POST['adresse']) && isset($_POST['name']) && isset($_POST['ref']) && isset($_POST['datel'])) 
	{
		$livraison= new livraison($_POST['number'],$_POST['town'],$_POST['adresse'],$_POST['name'],$_POST['ref'],$_POST['datel']);
		$livraisonCore= new livraisonCore();
		$livraisonCore->ajouter($livraison);
	header('Location: ../Views/afficher.php');
	}
	


?>