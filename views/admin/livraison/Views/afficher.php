
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="affiche.js"></script>
	<script src="test.js"></script>
	<script src="test1.js"></script>
	<link href="afficher.css" rel="stylesheet" type="text/css" >
	<script src="livraison.js"></script>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	  
	  <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      
      <!--checkout-->
      <link rel="stylesheet" type="text/css" href="css/checkout.css">
      <!--//checkout-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	  <style>
	  .content-table{
		  border-collapse:collapse;
		  margin:25px 0;
		  font-size:0.9em;
		  min-width:400px;
		  border-radius:5px 5px 0 0;
		  overflow:hidden;
		  box-shadow: 0 0 20px rgba(0,0,0,0.15);
	  }
	  .content-table thead tr{
		  background-color:	#e35d6a;
		  color:#fffff;
		  text-align:left;7font-weight:bold;
	  }
	  .content-table th,
	  .content-table td{
		  padding:12px 15px;
	  }
	  .content-table tbody tr{
		  border-bottom:1px solid #dddddd;
	  }
	  .content-table tbody tr:nth-of-type(even){
		  background-color:#f3f3f3;
	  }
	  .content-table tbody tr:last-of-type{
		  border-bottom:2px solid #e35d6a;
	  }
	  .content-table tbody tr.active-row{
		  font-weight:bold;
		  color:#e35d6a;
	  }
	  </style>
</head>

    <body>
      <!--headder-->
      <div class="header-outs" id="home">
         <div class="header-bar">
            <div class="info-top-grid">
               <div class="info-contact-agile">
                  <ul>
                     <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+(000)123 4565 32</p>
                     </li>
                     <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">info@example1.com</a></p>
                     </li>
                     <li>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="index.html">Toys-Shop</a></h1>
                  </div>
                  <div class="col-lg-5 col-md-6 search-right">
                     <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                     </form>
                  </div>
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              <span class="far fa-heart"></span>
                           </li>
                           <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                           </li>
                           <li class="toyscart toyscart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                                 </button>
                              </form>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="../../front/views/index.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <ul class="navbar-nav ">
                     
                     
                     <li class="nav-item">
                        <a href="../../../service.html" class="nav-link">Service</a>
                     </li>
                     <li class="nav-item">
                        <a href="../../front/views/shop.php" class="nav-link">Shop Now</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        categories
                        </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">	
						  <?php
						  include("../../../../core/categorieC.php");
						  $categorieC=new CategorieC();
						  $liste=$categorieC->AfficherCategorie();
						  while($row=$liste->fetch())
						  {
						  ?>
					    
                     
                        <a class="nav-link" href="../../../product.php?cat=<?php echo $row['id']?>"><?php echo $row['nom']; ?></a>
                       
                        
					  <?php
					  }
					  ?>
					  </li>
							 
                     
                     <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                     </li>
					 
                  </ul>
               </div>
            </nav>
         </div>
		  </div>
         <!--//headder-->
         <!-- banner -->
         <div class="inner_page-banner one-img">
         </div>
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="index.html">Home</a>
                     <span>/ /</span>
                  </li>
                  <li>Checkout</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
         <!--Checkout-->  
         <!-- //banner -->
         <!-- top Products -->
<!-------------------> 

 <div class="card mb-3">
 <div class="card-body">

  <div class="card-header">
	<h2 class="nav-link">Liste des livraison:</h2>
	
 
	<?php

	    include('../Core/livraisonCore.php');

		$livraisonCore=new livraisonCore();
		$listeLiv= $livraisonCore->affiche_return();
		
	?>
		
<table class="content-table">
<thead>
 
	<tr class="active-row">
	    <th class="choix" name="id">id</th>
		<th class="choix" >Number</th>
		<th class="choix">Town</th>
		<th class="choix">Adresse</th>
		<th class="choix">Name</th>
		<th class="choix">Reference</th>
		<th class="choix">Date</th>
		<th class="choix">Cost</th>
		<th>Reclamer</th>
	    <th>Modifier</th>
		<td></td>
		<td></td>
		<td></td>
		
	</tr>
</thead>	
	
	
	

	
	<?php
		while($donne = $listeLiv->fetch())
		{
		$today=date('Y/m/d');
		$date=$donne['datel'];
		$td=strtotime($today);
	    $d=strtotime($date);
		
		
		if($td>=$d)
		{
	?>
	<tbody>
	    <tr >   
            <td><?php echo $donne['id'];?></td>		
			<td><?php echo $donne['number'];?></td>
			<td><?php echo $donne['town'];?></td>
			<td><?php echo $donne['adresse'];?></td>
			<td><?php echo $donne['name'];?></td>
			<td><?php echo $donne['ref'];?></td>
			<td><?php echo $donne['datel'];?></td>
			<?php
			if($donne['town']=='tunis' || $donne['town']=='tunisia')
			{
			?>
			<td><?php echo '10.00$';?></td>
			<?php 
			}
			else
			{
			?>
			<td><?php echo '30.00$';?></td>
			<?php 
			}
			?>
		<form action='reclamer.php' method="POST">
		<td><button value="Reclamer" class='btn btn-danger'/><strong>Reclamer</strong></td>
		</form>
		<td><a class="btn btn-success" href="edit.php?edit_id=<?php echo $donne['id']; ?>" alt="edit" ><strong>Modifier</strong></a></td>
		<td>
	    Est-ce que votre livraison a éte bien recue?
		</td>
		
		<td><input type="submit" value="Oui" class='btn btn-info' onclick="test2()" /></td>
		
		<td>
		<form method="POST" action="oui.php" name="f1">
		<input type="submit" value="Non" class='btn btn-info' onclick="test1()"/>
		</form>
	
	    </td>
	
	</tr>
	
	
			
    <?php
		}
        else
        {
	?>
			</tbody>
	    <tr >   
            <td><?php echo $donne['id'];?></td>		
			<td><?php echo $donne['number'];?></td>
			<td><?php echo $donne['town'];?></td>
			<td><?php echo $donne['adresse'];?></td>
			<td><?php echo $donne['name'];?></td>
			<td><?php echo $donne['ref'];?></td>
			<td><?php echo $donne['datel'];?></td>
			<?php
			if($donne['town']=='tunis' || $donne['town']=='tunisia')
			{
			?>
			<td><?php echo '10.00$';?></td>
			<?php 
			}
			else
			{
			?>
			<td><?php echo '30.00$';?></td>
			<?php 
			}
			?>
		<form action='reclamer.php' method="POST">
		<td><button value="Reclamer" class='btn btn-danger'/><strong>Reclamer</strong></td>
		</form>
		<td><a class="btn btn-success" href="edit.php?edit_id=<?php echo $donne['id']; ?>" alt="edit" ><strong>Modifier</strong></a></td>
		
<?php		
		}			
		}
?>
		
</tbody>
</tr>
</table>
<form method="POST" action="confirmer.php" name="f4">
<input type="submit" value="ok" onclick="test()" class="bouton1" />
</form>

	</div>
	</div>
	</div>





<!-------------->
<!--subscribe-address-->
      <section class="subscribe">
         <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 map-info-right px-0">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
            </div>
            <div class="col-lg-6 col-md-6 address-w3l-right text-center">
               <div class="address-gried ">
                  <span class="far fa-map"></span>
                  <p>25478 Road St.121<br>USA New Hill
                  <p>
               </div>
               <div class="address-gried mt-3">
                  <span class="fas fa-phone-volume"></span>
                  <p> +(000)123 4565<br>+(010)123 4565</p>
               </div>
               <div class=" address-gried mt-3">
                  <span class="far fa-envelope"></span>
                  <p><a href="mailto:info@example.com">info@example1.com</a>
                     <br><a href="mailto:info@example.com">info@example2.com</a>
                  </p>
               </div>
            </div>
         </div>
		 </div>
      </section>
	  
      <!--//subscribe-address-->
      <section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch Us</h3>
            <div class="icons mt-4 text-center">
               <ul>
                  <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                  <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                  <li><a href="#"><span class="fas fa-rss"></span></a></li>
                  <li><a href="#"><span class="fab fa-vk"></span></a></li>
               </ul>
               <p class="my-3">velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
                  velit sagittis vehicula. Duis posuere 
               </p>
            </div>
            <div class="email-sub-agile">
               <form action="#" method="post">
                  <div class="form-group sub-info-mail">
                     <input type="email" class="form-control email-sub-agile" placeholder="Email">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn subscrib-btnn">Subscribe</button>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2018 Toys-Shop. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
</body>
</html>