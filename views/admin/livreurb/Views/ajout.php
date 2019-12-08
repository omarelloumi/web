<?php

include('../Core/livreurCore.php');


if(isset($_POST['number']) && isset($_POST['town']) && isset($_POST['name']) && isset($_POST['ref'])) 
	{
		$livreur= new livreur($_POST['number'],$_POST['town'],$_POST['name'],$_POST['ref']);
		$livreurCore= new livreurCore();
		$livreurCore->ajouter($livreur);
	header('Location: ../Views/afficher.php');
	}


?>