
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Nutri-Fitness</title>
<link rel="shortcut icon" href="http://latinohitsradio.com/wp-content/uploads/2017/01/nutrifitness.png" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers" >
			<a href="index.php">Ofertas especiales!</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Buscar producto..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar producto';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
						<fieldset>
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
						">
						<!--<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">-->
						<input type="submit" name="submit" value="Ver carrito      " class="button" />
						<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
						</fieldset>
					</form>
		 </div>
			<!--<div class="w3l_offers" id="usernameClass">				
				<h2><?php if(isset($_SESSION["usuario"])){echo $_SESSION["usuario"]["username"];}?></h2>
			</div> -->
		<div class="w3l_header_right">
			<ul>
				<div class="usernameClass">				
				<a><?php if(isset($_SESSION["usuario"])){echo $_SESSION["usuario"]["username"];}?></a>
			</div>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="login.php">Entrar</a></li> 
								<li><a href="login.php">Regístrate</a></li>
								<li><a href="login.php">Salir</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.php">Contáctenos</a></h2>
		</div>
		
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span></span> <img src="images/nutrifitnes2.png" alt=" " class="img-responsive" width="60%" height="30%"/></a></h1>
			</div>
			<div><br><br></div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>2234 6567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">nutrifitnessweb3@gmail.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Pagina Principal</a><span>|</span></li>
				<li>Bandas Elasticas</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="AumentoMasa.php">Aumento de Masa</a></li><!--Branded Foods-->
						<li><a href="Barritas.php">Barritas</a></li><!-- Households-->
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Accesorios de Entrenamiento<span class="caret"></span></a><!--Veggies & Fruits-->			
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="EntrenamientoAbdominal.php">Entrenamiento Abdominal</a></li>
										<li><a href="BandasElasticas.php">Bandas Elasticas</a></li>
										<li><a href="ColchonetasEsterillas.php">Colchonetas - Esterillas</a></li>
										<li><a href="Fitballs.php">Fitballs</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="ControlPeso.php">Control de Peso</a></li>
						<li><a href="Energeticos.php">Energeticos</a></li>
						<li><a href="Proteinas.php">Proteínas</a></li>
						<li><a href="VitaminasMinerales.php">Vitaminas y Minerales</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_bannerBandas w3l_banner_nav_right_banner_pet">
				<h4>Accesorios de Entrenamiento</h4>
				<p></p>
				<a href="#">Comprar ahora</a>
			</div>
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3 class="w3l_fruit">Bandas Elásticas</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="#"><img src="images/Productos/accesoriosEntrenamiento/bandasElasticas/Reebok-PowerBandLevel2-1.jpg" alt=" " class="img-responsive" alt=" " class="img-responsive"  /> </a>
											<p>Power Band Reebok</p>
											<h4>$7.00 <span>$8.00</span></h4>
										</div>
										<div class="snipcart-details">
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="E8VWQZ3VP8DQ4">
											<input type="submit" name="submit" value="Añadir al Carrito" class="button" />
											<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
											</form>

										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="#"><img src="images/Productos/accesoriosEntrenamiento/bandasElasticas/Reebok-ResistanceTube-1.jpg" alt=" " class="img-responsive" /></a>
											<p>Banda de Resistencia Reebok</p>
											<h4>$10.00 <span>$12.00</span></h4>
										</div>
										<div class="snipcart-details">
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="W5Z2CDJMH6AKE">
											<input type="submit" name="submit" value="Añadir al Carrito" class="button" />
											<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
											</form>

										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="#"><img src="images/Productos/accesoriosEntrenamiento/bandasElasticas/SKLZ.jpg" alt=" " class="img-responsive" /></a>
											<p>Banda SKLZ</p>
											<h4>$6.00 <span>$7.00</span></h4>
										</div>
										<div class="snipcart-details">
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="NSEV3V3ZCVD3W">
											<input type="submit" name="submit" value="Añadir al Carrito" class="button" />
											<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
											</form>

										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="#"><img src="images/Productos/accesoriosEntrenamiento/bandasElasticas/SKLZ-SingleQuickChangeFlexHandle.jpg" alt=" " class="img-responsive" /></a>
											<p>Banda Flexible SKLZ</p>
											<h4>$12.00 <span>$14.00</span></h4>
										</div>
										<div class="snipcart-details">
											<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
											<input type="hidden" name="cmd" value="_s-xclick">
											<input type="hidden" name="hosted_button_id" value="QGG4QDR4C65A2">
											<input type="submit" name="submit" value="Añadir al Carrito" class="button" />
											<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
											</form>

										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-6 w3_footer_grid">
				<h3>Información</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="about.php">Sobre nosotros</a></li>
				</ul>
			</div>
			<div class="col-md-6 w3_footer_grid">
				<h3>Politicas del sitio</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="privacy.php">Politicas de privacidad</a></li>
					<li><a href="about.php">Equipo de trabajo</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-6 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% seguridad en pagos</h4>
						<img src="images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-6 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>Conectate a nuestra redes sociales</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 Nutri-Fitness. Todos los derechos reservados | Creada para la Globalización por  <a href="http://w3layouts.com/">Angelica,Carolina,Liseth</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>s
</body>
</html>