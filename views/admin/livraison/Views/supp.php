<?php

include('../Core/config.php');
$number=$_POST['number'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="DELETE FROM livraison WHERE id='".$_GET['del_id']."'";
$query=mysqli_query($conn,$sql) or die($sql);
if (mysqli_query($conn,$sql))
{
    echo "Record deleted successfully";
} 
    else
{
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:afficher.php");
?>