<?php session_start() ?>
<html>
<head>
<title>Gestion d'ajout dans un panier</title>
</head>
<body>
 <?php

//A faire vérification de la validité de l'id du produit ex pour un valeur numérique
$motif="^([0-9]+)$"; //Ce motif définit uniquement des valeurs numériques 

///on vérifie si l'id du produit est valide
if(!eregi($motif,$_GET["prod"]) && isset($_GET["prod"]))
	{
		echo 'L\'id du produit n\'est pas valide m\'sieur!! </br >';
		$flag=0;//drapeau pour dire que l'id est pas valide
	}
	else
	{
		$flag=1; //sinon ben l'id elle est valide m'sieur :)
	}	
///ya t-il un produit de selectionner ?

///Si tout va bien on traite l'ajout
if (isset($_GET["prod"]) && $flag==1 && $_GET['action']=='ajout') 
	{
//le produit est il déja present dans le panier ?
 		$tab_produit=explode(";",$_SESSION['produit']);
		
		if (in_array ($_GET["prod"], $tab_produit)) // ici modif par rapport à l'ancien script en effet cela entrainait des erreurs sur les ID (on vérifié si l'id est présente dans le tableau)
	 			 {
		///oui mais ou est til?
				
//on met la chaine dans un tableau et on compte
				$nb=count($tab_produit);
				$nb--;//ca c'est a cause du ";" en trop la fin de la chaine
					for($n=0;$n<$nb;$n++)
					{
						if($tab_produit[$n]==$_GET["prod"])
							{
						$indice=$n;//cool on l'a repéré
							}
		   			 }
///on va remplacer la valeur de la quantité correspondant au produit en incrementant de 1
		$tab_qtite=explode(";",$_SESSION['qtite']);
		$tab_qtite[$indice]++;
// et hop on retablit le tableau en chaine de caracteres
		$_SESSION['qtite']=implode(";",$tab_qtite);
				}
		else 
			{
///on incremente les variables produits
			$_SESSION['produit'].=$_GET["prod"].";";
 ///valeur par défaut de la quantité lors du premier clique
			$_SESSION['qtite'].="1".";";

			}
	}
	
//Et en exclusivité mondial la suppression de produit 
if (isset($_GET["prod"]) && $flag==1 && $_GET['action']=='suppall') 
	{
///c'est exactement la même chose sauf qu'on supprimer
		$tab_produit=explode(";",$_SESSION['produit']);
		
			if (in_array ($_GET["prod"], $tab_produit))
				
				{
				 	 $nb=count($tab_produit);
					 $nb--;//ca c'est a cause du ";" en trop la fin de la chaine
						for($n=0;$n<$nb;$n++)
							{
							if($tab_produit[$n]==$_GET["prod"])
								{
								$indice=$n;//cool on l'a repéré
								}
		   					 }
					//maintenant il faut tirer sur la cible !!
					//donc on eneleve le produit
					unset($tab_produit[$indice]); //pan !
					$_SESSION['produit']=implode(";",$tab_produit);// on rétablit la chaine
					
					//on fait pareille pour la quantité
					$tab_qtite=explode(";",$_SESSION['qtite']); // on vise !
					unset($tab_qtite[$indice]); // pan !!
					$_SESSION['qtite']=implode(";",$tab_qtite); // on rétablit la chaine
					
					//et on supprime l'id de produit que l'on veut pas
				}
	}		
					 
///suppression d'un seul produit
if (isset($_GET["prod"]) && $flag==1 && $_GET['action']=='suppone') 
	{
	//idem que les autres (la je répète exprêt pour bien décomposer les 3 actions mais autant faire une fonction je vous laisse la faire ... faut pas abuser :)
	$tab_produit=explode(";",$_SESSION['produit']);
		
			if (in_array ($_GET["prod"], $tab_produit))
				
				{
				 	 $nb=count($tab_produit);
					 $nb--;//ca c'est a cause du ";" en trop la fin de la chaine
						for($n=0;$n<$nb;$n++)
							{
							if($tab_produit[$n]==$_GET["prod"])
								{
								$indice=$n;//cool on l'a repéré
								}
		   					 }
					$tab_qtite=explode(";",$_SESSION['qtite']); // on vise !
					//on décrémente la quantité correspondant à l'id du produit 
					//mais attention quand on atteint 0 et ben le pauvre produit faut le supprimer complètement
					if($tab_qtite[$indice]<1)
					 {
					 unset($tab_qtite[$indice]); // pan j'en veux plus m'sieur
					 unset($tab_produit[$indice]); //pan !
					$_SESSION['produit']=implode(";",$tab_produit); // on rétablit la chaine produit
					$_SESSION['qtite']=implode(";",$tab_qtite); // on rétablit la chaine quantité
					 }
					 else // sinon et ben on décrémente tout simplement vala
					 {
					 //Au prochain clique quand on arrive à 1 il faut penser à retirer le produit
					 					 
					$tab_qtite[$indice]--; //j'en veux 1 de moins m'sieur
					if($tab_qtite[$indice]==0) //ca c'est pour ne pas afficher 0 quand ya plus de produits dans la musette !!
					 {
					   unset($tab_qtite[$indice]); // pan j'en veux plus m'sieur
					 unset($tab_produit[$indice]); //pan !
					$_SESSION['produit']=implode(";",$tab_produit); // on rétablit la chaine produit
					$_SESSION['qtite']=implode(";",$tab_qtite); // on rétablit la chaine quantité
					}
					else
					{
					$_SESSION['qtite']=implode(";",$tab_qtite); // on rétablit la chaine
					}
					}
				}	
   }
//aller hop on affiche tout ca:
$tab_produit=explode(";",$_SESSION['produit']);
$tab_qtite=explode(";",$_SESSION['qtite']);
$nb=count($tab_qtite);
$nb--;
echo 'Liste des quantités de produits reperés par leur ID: </br ></br >';
for($n=0;$n<$nb;$n++){
echo 'Nombre de produits avec l\'id <b>'.$tab_produit[$n].'</b> : <b>'.$tab_qtite[$n].'</b> unité(s)</br >';
}

?>
<p><a href="panier.php?prod=1&action=ajout">Ajouter un produit ID1</a> | <a href="panier.php?prod=1&action=suppall">Supprimer tous les produits  ID1</a> | <a href="panier.php?prod=1&action=suppone">Supprimer un produits  ID1</a></p>
<p><a href="panier.php?prod=2&action=ajout">Ajouter un produit ID2</a> | <a href="panier.php?prod=2&action=suppall">Supprimer tous les produits  ID2</a> | <a href="panier.php?prod=2&action=suppone">Supprimer un produits  ID2</a></p>
<p><a href="panier.php?prod=112&action=ajout">Ajouter un produit ID3</a> | <a href="panier.php?prod=112&action=suppall">Supprimer tous les produits  ID3</a> | <a href="panier.php?prod=112&action=suppone">Supprimer un produits  ID3</a></p>
<p><a href="panier.php?prod=21&action=ajout">Ajouter un produit ID4</a> | <a href="panier.php?prod=21&action=suppall">Supprimer tous les produits  ID4</a> | <a href="panier.php?prod=21&action=suppone">Supprimer un produits  ID4</a></p>

</body>
</html>