<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="affiche2.js"></script>
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
      
      <li class="nav-item">
        <a class="nav-link" href="../../back/tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
	  </li>
	     <li class="nav-item">
        <a class="nav-link" href="../../produits.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Produits</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="../../categories.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Categories</span></a>
      </li>
	 
	  <li class="nav-item">
        <a class="nav-link" href="livraison.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Livraison</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="reclamation.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Reclamation</span></a>
      </li>
	  
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
	<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Livraison</li>
        </ol>
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
  
	<?php

	    include('../Core/livreurCore.php');

		$livreurCore=new livreurCore();
		$listeLiv= $livreurCore->affiche_return();
	?>
		<center><h1 class="nav-link">liste des livreurs</h1></center>
<center><table border="4">
	
	<tr>
	    <th class="choix">id</th>
		<th class="choix">Number</th>
		<th class="choix">Town</th>
		<th class="choix">Name</th>
		<th class="choix">Reference</th>
		<th class="choix"></th>
		<th class="choix"></th>
		
		
        
		
	</tr>
	

	
	<?php
		while($donne = $listeLiv->fetch())
		{
	?>
	    <tr>   
            <td><?php echo $donne['id'];?></td>		
			<td><?php echo $donne['number'];?></td>
			<td><?php echo $donne['town'];?></td>
			<td><?php echo $donne['name'];?></td>
			<td><?php echo $donne['ref'];?></td>
			<td><a class="btn btn-success" href="edit2.php?edit_id=<?php echo $donne['id']; ?>" alt="edit" >Modifier</a></td>
	<form method="POST" action="supprimer3.php">
    <td><input type="submit" name="supprimer" class="btn btn-danger" value="supprimer">
    <input type="hidden" value="<?php echo $donne['id'];?>" name="id">
    </td>
    </form>
			
		</tr>
		
		
			
    <?php
		}
		
            
	?>
</div>
</div>
</div>
</table>
<form method="POST" action="confirmer.php" name="f4">
<input type="submit" value="ok" onclick="test1()" class="bouton1" />
</form>
<form method="POST" action="livraison.html" name="f4">
<input type="submit" value="Retour"  class="bouton1" />
</form>
</center>

</body>
</html>