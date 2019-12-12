<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Chakib Driss meubles | Home :: w3layouts</title>
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
      <!-- For Clients slider -->
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
      <div class="header-outs" id="home">
         <div class="header-bar">
            <div class="info-top-grid">
               <div class="info-contact-agile">
                  <ul>
                     <li>
                        <span class="fas fa-phone-volume"></span>
                        <p> +216 22521090</p>
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
                     <h1><a class="navbar-brand" href="index.html">Dolce casa</a></h1>
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
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     
                     <li class="nav-item">
                        <a href="service.php" class="nav-link">Service</a>
                     </li>
					 <li class="nav-item">
                        <a href="./admin/front/views/shop.php" class="nav-link">Shop Now</a>
                     </li>
                     
                    
                    
                 
					    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        categories
                        </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">	
						  <?php
						  include("../core/categorieC.php");
						  $categorieC=new CategorieC();
						  $liste=$categorieC->AfficherCategorie();
						  while($row=$liste->fetch())
						  {
						  ?>
					    
                     
                        <a class="nav-link" href="product.php?cat=<?php echo $row['id']?>"><?php echo $row['nom']; ?></a>
                       
                        
					  <?php
					  }
					  ?>
							 </div>
							</li>
					 
                     <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <!-- Slideshow 4 -->
         <div class="slider text-center">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>Choisissez votre meuble <br>préféré</h5>
                              <div class="bottom-info">
                                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>choisissez votre meuble <br>preféré</h5>
                              <div class="bottom-info">
                                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info">
                              <h5>Choisissez votre meuble<br> preféré</h5>
                              <div class="bottom-info">
                                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- //banner -->
      <!-- about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Articles sous promotion</h3>
            <div class="row banner-below-w3l">
               <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                  <img src="images/a1.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Table +3 vases</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                  <img src="images/a2.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">lit</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                  <img src="images/a3.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Canapé 2 places</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                  <img src="images/a4.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">table moderne</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                  <img src="images/a5.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">salle a manger</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                  <img src="images/a6.jpg" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">salon moderne</h4>
                  </div>
               </div>
               <div class="toys-grids-upper">
                  <div class="about-toys-off">
                     <h2>Get Up to <span>30% Off </span>On Selected Furnitures</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //about -->
      <!--new Arrivals -->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">New Arrivals</h3>
            <div class="slid-img">
               <ul id="flexiselDemo1">
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="images/a1.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Meubles modernes</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="images/a2.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Meubles modernes</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="images/a3.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Meubles modernes</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid ">
                        <img src="images/a4.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Meubles modernes</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid">
                        <img src="images/a5.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Meubles modernes</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="agileinfo_port_grid ">
                        <img src="images/a6.jpg" alt=" " class="img-fluid" />
                        <div class="banner-right-icon">
                           <h4 class="pt-3">Meubles modernes</h4>
                        </div>
                        <div class="outs_more-buttn">
                           <a href="shop.html">Shop Now</a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <!--//about -->
      <!--Customers Review -->
      <section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="clients">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Customers Review</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t1.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>meriem j1 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt1.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t2.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>med ali
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt2.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t1.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Meriem j1
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt1.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t3.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Med ali
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt1.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t2.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Meriem j1
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt2.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t3.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Med ali
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt1.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span> velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
      <!--//Customers Review -->
      <!-- Product-view -->
      
           
      <!--//Product-about-->
      <!--subscribe-address-->
      <section class="subscribe">
         <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 map-info-right px-0">
               <iframe src="https://www.google.tn/maps/place/Rue+Cheikh+Mohamed+Enneifer,+Tunis/@36.8624698,10.2680376,17z/data=!3m1!4b1!4m5!3m4!1s0x12e2b54f8a6e5ded:0x781c123d41a6b605!8m2!3d36.8624655!4d10.2702263?hl=fr"> </iframe>
            </div>
            <div class="col-lg-6 col-md-6 address-w3l-right text-center">
               <div class="address-gried ">
                  <span class="far fa-map"></span>
                  <p>rue Mohamed Enneifer<br>l'aouina-tunis-
                  <p>
               </div>
               <div class="address-gried mt-3">
                  <span class="fas fa-phone-volume"></span>
                  <p> +216 22521090<br>+216 27775770</p>
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
               © 2018 Dolce-casa. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
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
      <!-- //Modal 1-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	 
      <!--slider flexisel -->
      <script src="js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 3,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 2
         			}
         		}
         	});
         	
         });
      </script>
      <!-- //slider flexisel -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>