<?php
include('../Core/livraisonCore.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livraison";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//test si modifictaion demandee
$sql = "UPDATE livraison SET number='".$_POST['number']."' "
. ", town='" .$_POST['town'] . " ' "
. ", adresse='" .$_POST['adresse'] . " ' "
. ", nom='" .$_POST['nom'] . " ' "
. " WHERE nom='" . $_POST['nomOrigine'] . " ' ";
$resultat=mysql_query($sql,$conn);

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>