<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>base de donnees</title>
</head>
<body>

	<!-- Connexion Base de données -->
	<?php
		try
		{
			$bdd =new PDO('mysql:host=localhost;dbname=cours;charset=utf8','root','');
		}
		catch(Exception $e)
		{
			die('erreur:'.$e->getMessage());
		}
	?>

	<!--ajouter des information dans la Base de données -->
	<?php
		//methode 1:ajouter  info des utilisarteurs dans la base de donnees cours dans la table utilisateur 
	
		$bdd->exec('INSERT INTO utilisateur(id,nom,prenom,age,salaire,grade,pays)VALUES(2,\'khefacha\',\'belhsan\',18,500,\'etudiant\',\'france\')');
		echo 'Operation 1 effectué avec succés ! <br/>';


		//methode 2:ajouter  info des utilisarteurs dans la base de donnees cours dans la table utilisateur 
		$req=$bdd->prepare('INSERT INTO utilisateur(id,nom,prenom,age,salaire,grade,pays)VALUES(:id,:nom,:prenom,:age,:salaire,:grade,:pays)');
		$req->execute(array('id'=>4,'nom'=>'amri','prenom'=>'houssem','age'=>23,'salaire'=>2000,'grade'=>'prof','pays'=>'canada'));
		echo 'Operation 2 effectué avec succés ! <br/>';


		//methode 3:ajouter  info des utilisarteurs dans la base de donnees cours dans la table utilisateur 
		$id=5;
		$nom='hamraoui';
		$prenom='bassem';
		$age=30;
		$salaire=3000;
		$grade='comedien';
		$pays='canada';

		$req=$bdd->prepare('INSERT INTO utilisateur(id,nom,prenom,age,salaire,grade,pays)VALUES(:id,:nom,:prenom,:age,:salaire,:grade,:pays)');
		$req->execute(array('id'=>$id,'nom'=>$nom,'prenom'=>$prenom,'age'=>$age,'salaire'=>$salaire,'grade'=>$grade,'pays'=>$pays));
		echo 'Operation 3 effectué avec succés ! <br/>';
	?>
	<!-- Modifier des information dans la Base de données -->
	<?php
	$id=2;
	$age=45;
	$pays='italia';
	$req1=$bdd->prepare('UPDATE utilisateur SET age=:age , pays=:pays WHERE id=:id');
	$req1->execute(array('id'=>$id , 'age'=>$age , 'pays'=>$pays));
	echo 'Operation modifie 4 effectué avec succés ! <br/>';


	?>



		<!-- Modifier des information dans la Base de données -->
	<?php
	$age=50;
	$pays='canada';
	$req1=$bdd->prepare('UPDATE utilisateur SET age=:age WHERE pays=:pays');
	$req1->execute(array('age'=>$age,'pays'=>$pays));
	echo 'Operation modifie 5 effectué avec succés ! <br/>';
	?>
	<!-- supprimerr une ligne des information dans la Base de données -->
	<?php
    $age=50;
    $pays='canada';
    $req2=$bdd->prepare('DELETE FROM utilisateur WHERE age=:age AND pays=:pays');
    $req2->execute(array('age'=>$age,'pays'=>$pays));
    echo 'Operation supprime 6 effectué avec succés ! <br/>';
	?>

	<!------affichage--->
	<?php
				$resp=$bdd->query('SELECT * FROM utilisateur');
		while ($donne=$resp->fetch()) 
		{echo "<p>id: ".$donne['id']." </p><br/>";
	     echo "<p>nom: ".$donne['nom']." </p><br/>";
	     echo "<p>prenom: ".$donne['prenom']." </p><br/>";
	     echo "<p>age: ".$donne['age']." </p><br/>";
	     echo "<p>salaire: ".$donne['salaire']." </p><br/>";
	     echo "<p>grade: ".$donne['grade']." </p><br/>";
	     echo "<p>pays: ".$donne['pays']." </p><br/>";	
		}
		$resp->closeCursor();
		
	?>

<!------Methode 1 : affichage critere--->
<?php
	$resp2=$bdd->query('SELECT * FROM utilisateur WHERE pays=\'tunis\'');
	while($donne2=$resp2->fetch()) 
	{	 echo "<p>id: ".$donne2['id']." </p>";
	     echo "<p>nom: ".$donne2['nom']." </p>";
	     echo "<p>prenom: ".$donne2['prenom']." </p>";
	     echo "<p>age: ".$donne2['age']." </p>";
	     echo "<p>salaire: ".$donne2['salaire']." </p>";
	     echo "<p>grade: ".$donne2['grade']." </p>";
	     echo "<p>pays: ".$donne2['pays']." </p><br/>";	
	 }
	 $resp2->closeCursor();
?>


<!-- Methode 2 : affichage critere -->
	<?php

		$pays='tunis';
		$resp2=$bdd->prepare('SELECT * FROM utilisateur WHERE pays=:pays');
		$resp2->execute(array('pays'=>$pays));

		while($donne2=$resp2->fetch()) 
		{	 echo "<p>id: ".$donne2['id']." </p>";
		     echo "<p>nom: ".$donne2['nom']." </p>";
		     echo "<p>prenom: ".$donne2['prenom']." </p>";
		     echo "<p>age: ".$donne2['age']." </p>";
		     echo "<p>salaire: ".$donne2['salaire']." </p>";
		     echo "<p>grade: ".$donne2['grade']." </p>";
		     echo "<p>pays: ".$donne2['pays']." </p><br/>";	
		 }
		 $resp2->closeCursor();
	?>

	<!-- Methode 2 : affichage trieee -->
<?php
	echo "********************************************** <br/> ";
	$resp2=$bdd->query('SELECT * FROM utilisateur ORDER BY salaire ');
	while($donne2=$resp2->fetch()) 
	{	 echo "<p>id: ".$donne2['id']." </p>";
	     echo "<p>nom: ".$donne2['nom']." </p>";
	     echo "<p>prenom: ".$donne2['prenom']." </p>";
	     echo "<p>age: ".$donne2['age']." </p>";
	     echo "<p>salaire: ".$donne2['salaire']." </p>";
	     echo "<p>grade: ".$donne2['grade']." </p>";
	     echo "<p>pays: ".$donne2['pays']." </p><br/>";	
	 }
	 $resp2->closeCursor();
?>





<!-- Methode 2 : affichage trieee  decroisasant-->
<?php
	echo "********************************************** <br/> ";
	$resp2=$bdd->query('SELECT * FROM utilisateur ORDER BY salaire DESC');
	while($donne2=$resp2->fetch()) 
	{	 echo "<p>id: ".$donne2['id']." </p>";
	     echo "<p>nom: ".$donne2['nom']." </p>";
	     echo "<p>prenom: ".$donne2['prenom']." </p>";
	     echo "<p>age: ".$donne2['age']." </p>";
	     echo "<p>salaire: ".$donne2['salaire']." </p>";
	     echo "<p>grade: ".$donne2['grade']." </p>";
	     echo "<p>pays: ".$donne2['pays']." </p><br/>";	
	 }
	 $resp2->closeCursor();
?>


<!-- Methode 2 : affichage only n lignes-->
<?php
	echo "********************************************** <br/> ";
	$resp2=$bdd->query('SELECT * FROM utilisateur LIMIT 0,1'); // loula mnin chyabda w thenya 9adeh men lignes
	while($donne2=$resp2->fetch()) 
	{	 echo "<p>id: ".$donne2['id']." </p>";
	     echo "<p>nom: ".$donne2['nom']." </p>";
	     echo "<p>prenom: ".$donne2['prenom']." </p>";
	     echo "<p>age: ".$donne2['age']." </p>";
	     echo "<p>salaire: ".$donne2['salaire']." </p>";
	     echo "<p>grade: ".$donne2['grade']." </p>";
	     echo "<p>pays: ".$donne2['pays']." </p><br/>";	
	 }
	 $resp2->closeCursor();
?>

</body>
</html>