
<!DOCTYPE html>
<html>
<head>
<title></title>
<script src="livraison.js"></script>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	   <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!--checkout-->
      <link rel="stylesheet" type="text/css" href="css/checkout.css">
      <!--//checkout-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
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

 <div class="col-md-8 address_form">
                           <h4>More Details :</h4>
                           
						    <form method="POST" action="ajout.php" name="f1">
                              <section class="creditly-wrapper wrapper">
                                 <div class="information-wrapper">
                                    <div class="first-row form-group">
                                       <div class="controls">
                                          <label name="name" class="control-label">Full name: </label>
                                          <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                       </div>
                                       <div class="card_number_grids">
                                          <div class="card_number_grid_left">
                                             <div class="controls">
                                                <label name="number" class="control-label">Mobile number:</label>
                                                <input  class="form-control" type="text" placeholder="Mobile number" name="number">
                                             </div>
                                          </div>
                                         
                                          <div class="clear"> </div>
                                       </div>
                                       <div class="controls">
                                          <label name="town" class="control-label">Town/City: </label>
                                          <input name="town" class="form-control" type="text" placeholder="Town/City">
                                       </div>
                                       <div class="controls">
                                          <label name="adresse" class="control-label">Adresse: </label>
                                          <input name="adresse" class="form-control" type="text" placeholder="Adresse">
                                       </div>
									   <div class="controls">
                                          <label name="reference" class="control-label">Reference de la commande: </label>
                                          <input name="reference" class="form-control" type="text" placeholder="Reference">
                                       </div>
									   <div class="controls">
                                          <label name="datel" class="control-label">Date de la commande: </label>
                                          <input name="datel" class="form-control" type="text" placeholder="Date" value="<?php echo $date=date('y-m-d', strtotime('+7 day')); ?>">
                                       </div>
                                    </div>
									 
									
                                    <button class="submit check_out" onclick="test()">Ajouter</button>
									
                                 </div>
                              </section>
                          </form>
                          
                        </div>
                        <div class="clearfix"> </div>
                        <div class="clearfix"></div>
                     </div>
            
</body>
</html>