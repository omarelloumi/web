<?php

include('../Core/reclamationCore.php');


if(isset($_POST['rec']) && isset($_POST['name'])) 
	{
		$reclamation= new reclamation($_POST['rec'],$_POST['name']);
		$reclamationCore= new reclamationCore();
		$reclamationCore->ajoutrec($reclamation);
	header('Location: ../Views/afficher.php');
	}
	


?>