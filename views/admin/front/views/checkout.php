
   <?php
include "config.php";
include "panier.class.php";
session_start(); 
  $db = config::getConnexion();
    function query($sql,$data = array()){
      $req =$this->db->prepare($sql);
      $req->execute($data);
      var_dump($req->fetchAll());
   }     
if(isset($_POST['idsToDel'])){
   $panier = new panier($db);
   $idsDel=$_POST['idsToDel'];
   $listeIds=explode(',', $idsDel);
   foreach ($listeIds as $key => $value) {

         $panier->del($value);

   }
}

/*$panierC=new panierC();
$listeproduit=$panierC->afficherpanier();
$req="select * from panier";
$db=config::getConnection();
$listP=$db->query($req) ;
if (isset ($_POST['supprimer']))
{
   $req="delete from panier where nom=".$_POST['nom'];
   $db=config::getConnection($req);
   $sql=$db->prepare($req);
   $sql->execute();
*/
?>    

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Toys Shop an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
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
          function updatePrix(item,prix)
 {
   let idqte=item.getAttribute('data-id');

   let tot=item.value*parseFloat(prix);
  // document.getElementById('prix_'+idqte).text=tot;
   // document.getElementById("tot").value = tot;
     document.getElementById('modifForm_'+idqte).submit(); 

  

 }
      </script>
        <script >
         function ok(){
            alert(la commande a été passée avec succès
attendez-vous la confirmation.)
         }</script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--checkout-->
      <link rel="stylesheet" type="text/css" href="css/checkout.css">
      <!--//checkout-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <style type="text/css">
         .selected{
            background-color: rgba(0,0,0,50);
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
                     <h1><a class="navbar-brand" href="index.html">Dolce Casa</a></h1>
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
                              <form action="checkout.php" method="post" class="last">
                              
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
                        <a href="service.html" class="nav-link">Service</a>
                     </li>
                     <li class="nav-item active">
                        <a href="shop.php" class="nav-link">Shop Now</a>
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
                       </li>
                        
					  <?php
					  }
					  ?>
							 
                     <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                     </li>
                  </ul>
				  </div>
               </div>
            </nav>
         </div>
		  </div>
         <!--//headder-->     
                  
                     
          <!-- $sql="SELECT * from panier "   ;
                      foreach($count as $row)
                        {
                          echo '<div>'.$row["cnt"].'</div>';
                        }
                      ?>-->
         <!-- banner -->
         <div class="inner_page-banner one-img">
         </div>
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="index.php">Home</a>
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
         <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
               <div class="shop_inner_inf">
                  <div class="privacy about">
                     <h3>Chec<span>kout</span></h3>
                     <div class="checkout-right">
</h4>
                        <h4>Your shopping cart contains: <span><?php echo count($_SESSION['panier']); ?> Products</span>
            
               

              <br/>
              <form method="POST" action="checkout.php">
               <button class="btn btn-danger" type="submit" id="btnDelItems" style="margin-left: 55%" >Supprimer</button><br/><br/>

               <input type="hidden" id="idsToDel" name="idsToDel" value="" />
            </form>

                        <table id="myTable" class="timetable_sub table-hover">
                           <thead>
                              <tr>
                                 <th>Nom</th>
                                 <th>Image</th>

                                 <th>Quantite</th>
                                 <th>PrixTotale</th>

                              </tr>
                           </thead>
                           <tbody>

                     <?PHP
                        $db = config::getConnexion(); 

                     $ids = array_keys($_SESSION['panier']);
                     //array_shift($ids);

                     if(empty($ids)){
                        $liste = array();
                     }else
                      {

                     
                     $liste = $db->query('SELECT * FROM produit WHERE id_produit IN ('.implode(",", $ids).')')->fetchAll();
                     }
                    


                 $sessList=$_SESSION['panier'];
                // array_shift($sessList);
                 $i=0;
         foreach($sessList as $key => $row){
          //  for($i=$ids[0];$i<count($sessList);$i++){
            $prixFacturee=0;


           $idProd=$ids[$i];
           $prod=$liste[$i];
                     $i++;

   ?>

        <tr>
   <td><?PHP echo $prod['nom']; ?>
   </td>
   
      
<td>
      <image width="170px" height="150px" src="<?php echo $prod['img'] ?>" />
      </td>
   <td>
      <form method="POST" id="modifForm_<?php echo $idProd; ?>" action="modifierproduit.php">

      <input type="number" min="1" class="form-control col-md-6" name="quantite" data-id="<?php echo $idProd; ?>" onchange="updatePrix(this,<?php echo $prod['prix']; ?>)" value="<?PHP echo $row; ?>" />

            <input type="hidden"  name="qteId" value="<?PHP echo $idProd; ?>" />
   </form>

      </td>
      <td>
      
      

      <input type="hidden" value="<?PHP echo $prod['prix']; ?>" name="id">
      <?php $prixtot=$prod['prix']*$row; ?>

      <h4 name="prixU" id="prix_<?php echo $idProd; ?>"><?php echo $prixtot;?></h4>
     
      

   </td>
   
  
   
   
   </tr>
   <?php //endforeach: ?>
   <?PHP
}
?>
        
        </tbody>

 
         </table>
<?php
   $panier = new panier($db); ?>
   <div >
 <h4 style="text-align: left;">Grand Total: <span><?php echo($panier->total()); ?> DT</span>
  </h4> </div>          
               


<?php 
?>

                     
                       <div class="checkout-left">   
            <table>
               <td> <div>
             <a href="shop.php"><span class="btn btn-dark" aria-hidden="true">Back To Shopping</span></a>
            </div> </td>
            <td></td>
            <td></td>
            <td><div> <form method="POST" action="ajouterlignecommande.php">

             <input type="submit" class="btn btn-success" name="commande" value="commander" onclick="ok()" >
            </form>
                     </div></td>
					 
					 <td><div> <form method="POST" action="../../livraison/Views/livraison.php">

             <input type="submit" class="btn btn-success" name="livraison" value="delivery to this adress" onclick="ok()" >
            </form>
                     </div></td>
            </table>
               <div> 
            <center>
            
            
          </center>
            </div>
            <div class="clearfix"> </div>
         </div>
                           
                        <div class="clearfix"> </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <!-- //top products -->
            </div>
      </section>
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
      <!--// cart-js -->
      <!--quantity-->
      <script>
         $('.value-plus').on('click', function () {
         	var divUpd = $(this).parent().find('.value'),
         		newVal = parseInt(divUpd.text(), 10) + 1;
         	divUpd.text(newVal);
         });
         
         $('.value-minus').on('click', function () {
         	var divUpd = $(this).parent().find('.value'),
         		newVal = parseInt(divUpd.text(), 10) - 1;
         	if (newVal >= 1) divUpd.text(newVal);
         });
      </script>
      <!--quantity-->
      <!--closed-->
      <script>
         $(document).ready(function (c) {
         	$('.close1').on('click', function (c) {
         		$('.rem1').fadeOut('slow', function (c) {
         			$('.rem1').remove();
         		});
         	});
         });
      </script>
      <script>
         $(document).ready(function (c) {
         	$('.close2').on('click', function (c) {
         		$('.rem2').fadeOut('slow', function (c) {
         			$('.rem2').remove();
         		});
         	});
         });
      </script>
      <script>
         $(document).ready(function (c) {
         	$('.close3').on('click', function (c) {
         		$('.rem3').fadeOut('slow', function (c) {
         			$('.rem3').remove();
         		});
         	});
         });
      </script>
      <!--//closed-->
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
      <script>
    $('#number-plus').on('click', function(){
var divUpd = $(this).parent().find('.number'), newVal = parseInt(divUpd.text(), 10)+1;
divUpd.text(newVal);
$("#Num").val(newVal);
});
 $('#snumber-minus').on('click', function(){
var divUpd = $(this).parent().find('.number'), newVal = parseInt(divUpd.text(), 10)-1;
if(newVal>=1) divUpd.text(newVal);
$("#Num").val(newVal);
      </script>
      <script >
function calculTotal(){
                var prix = Number(document.getElementById("prix").value);
 
                var quantite = Number(document.getElementById("qte").value);
 
                var amount = Number(prix * quantite);
                document.getElementById("amount").value = amount;
            }

</script>
<script>

   $(document).ready(function() { //Inicio
    var myTable = $('#myTable');
  
    $('#myTable tbody').on( 'click', 'tr', function () {
       $(this).toggleClass('bg-danger');
    });
        
    //Contar filas seleccionadas
    $('#btnDelItems').click(function() {
       //alert(myTable.rows().data().length+' row(s) selected' );
      
      //Recorre las filas de la tabla
        $('#myTable tbody tr').each(function(indexFila){
          //verifica si  la fila seleccionada tiene la clase 'selected' 
          if($(this).hasClass('bg-danger')) { 



                     console.log("La fila: "+indexFila+" se ha seleccionado");



  //Recorre las columnas de la tabla
          $(this).children('td').each(function(indexColumna){
            if(indexColumna==2){
              campo=$(this);
               let inp=campo.find("input").attr("data-id");
             //idsToDel
               let btnVal="";
               if($("#idsToDel").val())
               {
                  btnVal=$("#idsToDel").val();

               }
               btnVal+=inp+',';
               $("#idsToDel").val(btnVal+"");
              
            };
          });

                  }
              

        
          
        });//fin de '#myTable tbody tr'
      
    });//fin (btnSeleccionados)
    // alert(myTable.rows('.selected').data().length+' row(s) selected' );
  
    //Obtener valor de las filas a las que se hace click
   /* var myFila= myTable.row( this ).data(); //Obtiene datos de una fila
    $.each(myFila,function(index, contenido){ //Recorre un array
       if(index==2){
          alert(contenido);
       };
    }); */
  
} );//Fin
   </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script >
         function ok(){
            alert(la commande a été passée avec succès
attendez-vous la confirmation.)
         }</script>
      </script>
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>