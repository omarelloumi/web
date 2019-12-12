<?php
include "../entities/panier.php";
include "../core/panierC.php"; 
session_start(); 
if(isset($_SESSION["id_client"]))
{
if (isset($_POST["id_produit"])) 
{
$produit1C=new panierC(); 
$info=$produit1C->verifierexitenceprod($_SESSION["id_client"],$_POST["id_produit"]);
$info1=$info->fetch();
$c=$info1["cnt"];
if ($c==0)
{
$yID=$_POST["id_produit"];
 $sql="SELECT * from promo where idProd = $yID ";
$db = config::getConnexion();
$idPromo=$db->query($sql);
$prix = -1;
foreach($idPromo as $nn)
{
 $prix = $nn['prix_nouveau'];
}
if($prix!=-1)
{
  $produit1C=new panierC();
  $produit1=$produit1C->recupererproduit($_POST["id_produit"]);
  $info=$produit1->fetch(); 
if ($info["Quantite"]==0) 
	{
echo ("<script> alert(\"ce produit n'existe plus \") </script>");
echo("<script> document.location.replace(\"index1.php\")</script>");
  	
  }
  
    
 else 
{ 
$produit1=new Panier($info["id_produit"],$info["nom"],$prix,1,$info["img"]);
$produit1C->ajouteraupanier($produit1,$_SESSION["id_client"]); 
header('Location: index1.php');
}
}		
else 
{	
$produit1C=new panierC();
$produit1=$produit1C->recupererproduit($_POST["id_produit"]);
$info=$produit1->fetch(); 
if($info["Quantite"]==0)
  	{
  		echo ("<script> alert(\"ce produit n'existe plus \") </script>");
echo("<script> document.location.replace(\"index1.php\")</script>");
  	}
 	else 
 	{
  $produit1=new Panier($info["Id"],$info["Nom"],$info["Prix"],1,$info["Image"]);


  $produit1C->ajouteraupanier($produit1,$_SESSION["idclient"]); 
  header('Location: index1.php');
}
  	}
}

else 
{
echo ("<script> alert(\"ce produit existe dans votre panier\") </script>");
echo("<script> document.location.replace(\"index1.php\")</script>");	
}
}
}
else 
{
echo ("<script> alert(\"vous n'etes pas connectés\") </script>");
echo("<script> document.location.replace(\"index.php\")</script>");
}
?>