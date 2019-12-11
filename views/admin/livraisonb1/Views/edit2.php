<?php
//Database Connection
include('../Core/config.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Get ID from Database
if(isset($_GET['edit_id'])){
 $sql = "SELECT * FROM livreurb WHERE id =" .$_GET['edit_id'];
 $result = mysqli_query($conn, $sql);
 $donne = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
 $id = $_POST['id'];
 $number = $_POST['number'];
 $town = $_POST['town'];
 $name = $_POST['name'];
 $ref = $_POST['ref'];
 
 $update = "UPDATE livreurb SET id='$id', number='$number',town='$town',name='$name',ref='$ref' WHERE id=". $_GET['edit_id'];
 $up = mysqli_query($conn, $update);
 if(!isset($sql)){
 die ("Error $sql" .mysqli_connect_error());
 }
 else
 {
 header("location: afficher2.php");
 }
}
?>
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: arial;
font-size: 15px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<!--Create Edit form -->
<!doctype html>
<html>
<head>
<link href="afficher.css" rel="stylesheet" type="text/css" >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DC Admin - Charts</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body id="page-top">
 <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">DolceCasa</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

	

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
	 
	  <li class="nav-item">
        <a class="nav-link" href="livreur.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Livreurs</span></a>
      </li>
	  
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
	  <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Livreur</li>
        </ol>

	
<center><form method="POST"></center>
<center><u><h2>Modifier les informations des livreurs:</h2></u></center>
<center>
<table border="4">


<tr>
<th>Id:  </th>
<th>Number: </th>
<th>Town:</th>
<th>Name:  </th>
<th>Reference:  </th>

</tr>

<tr>
<td><input type="text" name="id" placeholder="id" value="<?php echo $donne['id']; ?>"></td>
<td><input type="text" name="number" placeholder="Number" value="<?php echo $donne['number']; ?>"></td>
<td><input type="text" name="town" placeholder="Town" value="<?php echo $donne['town']; ?>"></td>
<td> <input type="text" name="name" placeholder="Name" value="<?php echo $donne['name']; ?>"></td>
<td> <input type="text" name="ref" placeholder="Ref" value="<?php echo $donne['ref']; ?>"></td>


</tr>
</table></br></center>

<center><button type="submit" name="btn-update" id="btn-update"  class="btn btn-secondary" onClick="update()"><strong>Modifier</strong></button></center></br>
<center><a href="afficher2.php"><button type="button" class="btn btn-secondary" value="button">Cancel</button></a></center>

</form>

<!-- Alert for Updating -->
<script>
function update(){
 var x;
 if(confirm("Updated data Sucessfully") == true){
 x= "update";
 }
}
</script>
</body>
</html>